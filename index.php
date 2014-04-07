<?php

/**
 * Copyright 2013 William Caleb Kelly
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Name:        index.php
 * Programmer:  Liam Kelly
 * Description: Handles requests for views.
 * Date:        12/24/13
 */

$start_time = microtime(true);

//Includes
require_once('./path.php');
require_once(ABSPATH.'includes/models/settings.php');
require_once(ABSPATH.'includes/models/protected_settings.php');
require_once(ABSPATH.'includes/models/users.php');
require_once(ABSPATH.'includes/models/groups.php');
require_once(ABSPATH.'includes/models/pages.php');
require_once(ABSPATH.'includes/models/debug.php');

//Secured io (Deprecated)
//require_once(ABSPATH.'includes/controllers/secured_io.php');

//Start the user's session
if(!(isset($_SESSION))){
    session_start();
}

//Setup the non database requiring system classes
$debug = new debug;
$set   = new settings;

//Setup the database
$dbc   = new db;

//Fetch the settings
$settings = $set->fetch();

//Secured io (for xss prevention)
//$io   = new secured_io;

//Define the base_dir variable
$base_dir = $settings['base_dir'];

//Include the theme config
require_once(ABSPATH.'includes/views/themes/'.$settings['theme'].'/config/theme_config.php');
$theme  = new theme_config;

//Make sure database connection did not fail
if($dbc->fail == true){

    //It failed, send user to 505 page
    include_once(ABSPATH.'includes/views/themes/'.$settings['theme'].'/errors/505.php');

}else{


//Setup up the database dependant classes
$users = new users($dbc);
$pages = new pages($dbc);

//Run system plugins
    include_once(ABSPATH.'includes/controllers/launch_system_plugins.php');

//Get the user's page request
    if(isset($_REQUEST['p']) && !(empty($_REQUEST['p']))){
        $request = $_REQUEST['p'];
    }else{
        $request = 'home';
    }

//Check for login
if(!(isset($_SESSION['user_id']))){

    //Are anonymous users allowed?
    if($settings['anon'] == true && $no_anon == false){

        //User is NOT logged in, use anonymous user instead
        $test = $users->login_anon();
        $users->setup_session();
        $_SESSION['anon'] = true;

    }else{

        //User is NOT logged in anonymous logins are DISABLED

        //Login user as restricted and send to login page
        $test = $users->login_restricted();
        $users->setup_session();
        header('location: /'.$base_dir.'/login');

    }


}

//Run any optional plugins
if($settings['plugins'] == true){

    include_once(ABSPATH.'includes/controllers/launch_optional_plugins.php');

}

//Look up the page
$page = $pages->lookup($request);

//Default authorization to false in case of failure
$auth = false;

if(!(empty($page))){

    //Check the user's clearance against the page's group(s)
    foreach($page as $key => $value){

        $auth = $users->clearance_check($_SESSION['user_id'], $value['group_id']);

        if($auth == true){
            break;
        }
    }
}

//Show only the first result
$page = $page[0];

$group = $page['group_id'];

//Start output buffering
ob_start();

    //Verify user is cleared to see the requested page
    if($auth == true || $page == null){

        //Define the file path
        $file = ABSPATH.'includes/views/themes/'.$settings['theme'].'/'.$page['path'];

        //Make sure the page's path is valid
        if(isset($page['path']) && file_exists($file)){

            //Page exists

            //We don't need to do anything here, because the page to be load has already be defined.

        }else{

            //Page does not exist or database error

            //DO NOT include the requested page

            //Use, the 404 page instead

            //Destroy any left over page data
            unset($page);

            //Force use of the 404 page
            $page['page_id'] = null;
            $page['name'] = null;
            $page['path'] = '/errors/404.php';
            $page['div_id'] = 'error-404';
            $page['group_id'] = $group;

        }



    }else{

        //DO NOT include the requested page

        //Use, the 403 page instead

        //Destroy any left over page data
        unset($page);

        //Force use of the 403 page
        $page['page_id'] = null;
        $page['name'] = null;
        $page['path'] = '/errors/403.php';
        $page['div_id'] = 'error-403';
        $page['group_id'] = $group;

    }

    //Time Debugging
    $end_time = microtime(true);
    $time = $end_time - $start_time;
    $footer_message = '<b>Info:</b> Page built in: '.$time.' sec.';

    //Include the view
    include_once(ABSPATH.'includes/views/themes/'.$settings['theme'].'/main.template.php');

//Conclude output buffer
$ob = ob_get_contents();
ob_end_clean();

//Send user the page
echo $ob;

//End of db fail test
}