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

//Debug the request
var_dump($_REQUEST);

//The user is trying to add a page
/*if(isset($_REQUEST['add'])){

    //Set everything up
    $name = $_REQUEST['add_name'];
    $path = $_REQUEST['add_path'];
    $div_id = $_REQUEST['add_div_id'];
    $parameters = $_REQUEST['add_parameters'];

    //Add the page
    $pages->add_page($name, $path, $div_id, $parameters);

    //Inform the user
    echo 'Adding page.<br />';
}*/

//var_dump($pages->pages_list());

//Set everything up
$page_id = $_REQUEST['page_id'];
$name = $_REQUEST['update_name'];
$path = $_REQUEST['update_path'];
$div_id = $_REQUEST['update_div_id'];
//$parameters = $_REQUEST['update_parameters'];

//var_dump($pages->update_page('21',$name,$path, $div_id, $parameters));

$parameters = array(
    'page_id'    => $page_id,
    'name'       => $name,
    'path'       => $path,
    'div_id'     => $div_id,
    'parameters' => 'asdf'
);


$query = "UPDATE `pages` SET `name` = :name, `path` = :path, `div_id` = :div_id, `parameters` = :params WHERE `page_id` = :page_id ";
$handle = $pages->dbc->dbc->prepare($query);
$handle->execute($parameters);



/*
//The user is trying to update a page
if(isset($_REQUEST['update'])){

    //Set everything up
    $page_id = $_REQUEST['page_id'];
    $name = $_REQUEST['add_name'];
    $path = $_REQUEST['add_path'];
    $div_id = $_REQUEST['add_div_id'];
    $parameters = $_REQUEST['add_parameters'];

    //Update the page
    //echo $pages->update_page($page_id,$name, $path, $div_id, $parameters);

    //Inform the user
    echo 'Updating page.<br />';

}
*/
//Debugging dump
//$pages->debug->more();
$pages->debug->dump();
