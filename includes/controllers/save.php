<?php

/**
 * Copyright 2014 William Caleb Kelly
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
 * Name:        Save
 * Description: Saves settings
 * Date:        4/6/14
 * Programmer:  Liam Kelly
 */

//includes
if(!(defined('ABSPATH'))){
    require_once('../../path.php');
}
require_once(ABSPATH.'includes/models/protected_settings.php');
require_once(ABSPATH.'includes/models/settings.php');

//Setup a new settings class
$set = new settings();

//Fetch the settings
$settings = $set->fetch();

//Update the settings
foreach($_REQUEST as $key => $value){

    //Ensure the key exists
    if(isset($settings[$key])){

        //Key exists, update it
        $settings[$key] = $value;

    }
}
var_dump($settings);
//Update the settings
$set->update($settings);