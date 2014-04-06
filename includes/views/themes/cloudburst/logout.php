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
 * Name:        Logout
 * Description: Destroy's a user's session
 * Date:        2/15/14
 * Programmer:  Liam Kelly
 */

//Make sure the user session is setup
if(isset($_SESSION)){

    //Detect anonymous user
    if(isset($_SESSION['anon'])){
        $anon = true;
    }

    //Destroy the session
    session_destroy();

    //Redirect the user
    if($anon == true){

        //User is anonymous, send to login
        header('location: '.$settings['url'].'/themes/'.$theme->dir_name.'/login.php');

    }else{

        //User is normal send to home page
        header('location: ./');

    }


}else{


    //The user's session does not exist
    echo 'Something went wrong, you don\'t exist';


}
