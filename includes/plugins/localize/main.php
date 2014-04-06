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
 * Name:        Localize plugin
 * Description: Adds support for localization based on ip addresses
 * Date:        4/6/14
 * Programmer:  Liam Kelly
 */

//includes
include_once(ABSPATH.'/includes/controllers/get_ip.php');

//Test to see if the user is on the local network
$results = false;//is_local();


//Disable anonymous logins for non local users
if($results == false){
    $no_anon = true;
}
