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
 * Name:        Secured io
 * Description: Removes Javascript from user inputs and outputs
 * Date:        2/14/14
 * Programmer:  Liam Kelly
 */

//Includes

    //Ensure ABSPATH is set
    if(!(defined('ABSPATH'))){
        require_once('../../path.php');
    }

require_once(ABSPATH.'/includes/models/settings.php');

class secured_io {

    //Class properties
    public $flagging = false;
    public $settings;

    //Functions

    public function __construct(){

        //Load settings from configuration
        $set = new settings;
        $this->settings = $set->fetch();

        //Re-define the configurable properties
        $this->flagging = $this->settings['io_flagging'];

    }

    public function out($data){

    }

    public function in($data){

    }



}