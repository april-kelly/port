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
    public $enabled = true;

    //Functions

    public function __construct(){

        //Load settings from configuration
        $set = new settings;
        $this->settings = $set->fetch();

        //Re-define the configurable properties
        $this->flagging = $this->settings['io_flagging'];
        $this->enabled  = $this->settings['enable_secured_io'];

    }

    //Sanitize data
    public function sanitize($data){

        return $data;

    }

    //Output with optional flagging
    public function out($data){

        //Check to see that we are enabled
        if($this->enabled == true){

            //Secured io is enabled

            //Check for flagging
            if($this->flagging == true){

                //Flagging is enabled

                //Flag
                echo '<span class="secured">';

                //Sanitize and send
                echo $this->sanitize($data);

                //End Flag
                echo '</span>';


            }else{

                //Flagging is disabled

                //Sanitize and send
                echo $this->sanitize($data);

            }

        }else{

            //Secured io has been disabled, just dump to the data to the page
            echo $data;

        }

    }

    //Direct output with no flagging
    public function dout($data){

        //Check to see that we are enabled
        if($this->enabled == true){

            //Sanitize and send
            echo $this->sanitize($data);

        }else{

            //Secured io has been disabled, just dump to the data to the page
            echo $data;

        }


    }

    //Input sanitize and return data
    public function in($data){

    }



}