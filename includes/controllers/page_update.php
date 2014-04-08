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
 * Name:        Page update
 * Description: Allows for creation, deletion and update of pages
 * Date:        4/6/14
 * Programmer:  Liam Kelly
 */

//Includes
if(!(defined('ABSPATH'))){
    require_once('../../path.php');
}
require_once(ABSPATH.'includes/models/pages.php');

//Setup the pages object
$pages = new pages;

//The user is trying to add a page
if(isset($_REQUEST['add'])){

    //Set everything up
    $name = $_REQUEST['add_name'];
    $path = $_REQUEST['add_path'];
    $div_id = $_REQUEST['add_div_id'];
    $parameters = $_REQUEST['add_parameters'];

    //Add the page
    $pages->add_page($name, $path, $div_id, $parameters);

     echo 'Adding page.<br />';
}


//The user is trying to update a page
if(isset($_REQUEST['update'])){
    $pages->update_page($page_id,$name, $path, $div_id, $parameters);
}

//Debugging dump
//$pages->debug->more();
$pages->debug->dump();
