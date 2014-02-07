<?php

/**
 * Copyright ${year} William Caleb Kelly
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
 * Name:        Kill Direct
 * Description: Redirects user attempts to directly access a page
 * Date:        2/6/14
 * Programmer:  Liam Kelly
 */

//Includes
if(!(defined('ABSPATH'))){
    require_once('../../../../path.php');
}
require_once(ABSPATH.'includes/models/users.php');
require_once(ABSPATH.'includes/models/settings.php');

//Fetch settings
$set = new settings;
$settings = $set->fetch();

/*
 * On all theme pages The $page variable should be set
 * if the user is accessing the page via index.php.
 * So we check for an unset $page variable and redirect
 * the user if unset.
*/



//Check for unset $page variable
if(!(isset($page))){

    header('Location: '.$settings['url']);

}