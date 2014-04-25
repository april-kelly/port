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
 * Name:        alert.php
 * Description: Handles alerts and system messages that are displayed to a user
 * Date:        4/25/14
 * Programmer:  Liam Kelly
 */

//Define the alerts class
class alerts {

    //Define object properties
    public $alerts = array();
    public $notices = array();

    public function add_alert($name, $body, $type = 0){

    //Start output buffering
    ob_start();

    //Add the alert

    if($type == 1){
        echo '<span class="alert-critical"><b>'.$name.':</b> '.$body.'</span>';
    }else{
        echo '<span class="alert"><b>'.$name.':</b> '.$body.'</span>';
    }


    //End output buffering
    $this->alerts[count($this->alerts) + 1] = ob_get_contents();
    ob_end_clean();

    //Return true
    return true;

}

    public function clear_alerts(){

        //Destroy the alerts
        $this->alerts = null;

    }

    public function fetch_alerts(){

        //Send the alerts
        return $this->alerts;

    }


    public function add_notice($name, $body){

        //Start output buffering
        ob_start();

        //Add the notice
        echo '<span class="notice"><b>'.$name.':</b> '.$body.'</span>';

        //End output buffering
        $this->notices[count($this->notices) + 1] = ob_get_contents();
        ob_end_clean();

        //Return true
        return true;

    }

    public function clear_notices(){

        //Destroy the notices
        $this->notices = null;

    }

    public function fetch_notices(){

        //Send the notices
        return $this->notices;

    }

}