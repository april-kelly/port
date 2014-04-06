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
 * Name:        Settings
 * Description: Saves application settings
 * Date:        11/27/13
 * Programmer:  Liam Kelly
 */

if(!(defined('ABSPATH'))){
    require_once('../../path.php');
}

class settings {

    //About (put your product's info here)
    public $product_name                            =   'CloudBurst';               //Your product name here
    public $version                                 =   '0.0.2';                    //Your version here
    public $version_type                            =   'pre-alpha';                //Your version type here

    //About Foundation Framework
    public $foundation_product_name                 =   'Foundation Framework';    //Defines the name of the foundation framework
    public $foundation_version                      =   '0.0.1';                   //Defines the foundation framework version
    public $foundation_version_type                 =   'pre-alpha';               //Defines the foundation type of release alpha, beta etc

    //Settings Definitions
    public $settings_path                           =   '';                        //Defines where the settings are stored (defined in the constructor)
    public $settings_filename                       =   'settings.json';           //Name of the settings save file

    //General Settings
    public $mlp                                     =   "\x61\x77\x65\x73\x6F\x6d\x65";   //Deal with it, ponies are awesome
    public $ponify                                  =   false;                     //Ponifys the application if implemented
    public $theme                                   =   'cloudburst';              //Sets the theme
    public $plugins                                 =   true;                      //Enables optional plugins
    public $debug                                   =   true;                      //Enables debugging
    public $page_title                              =   'CloudBurst';    //Page title
    public $domain                                  =   'localhost';     //Server Domian Name
    public $protocol                                =   'http://';       //Server Protocol such as http:// https:// or gopher://
    public $base_dir                                =   'port';          //Installation directory of foundation
    public $url                                     =   '';              //Set in the constructor

    //Security
    public $noauth_debug                            =   true;            //Displays debugging information upon 403 error
    public $anon                                    =   true;            //Enables anonymous users

    //Secured io (Deprecated)
    //public $enable_secured_io                       =   true;                       //Enables the secured io (to prevent from xss attacks)
    //public $io_flagging                             =   true;                       //Enables flagging of secured v. unsecured io

    //Constructor
    public function __construct(){

        //Define where the settings file is
        $this->settings_path =  ABSPATH.'includes/data/'.$this->settings_filename;

        //Define the full server url
        $this->url = $this->protocol.$this->domain.'/'.$this->base_dir.'/';

        //Make sure the settings file exists
        if(!(file_exists($this->settings_path))){

            //The file does not exist, create it
            file_put_contents($this->settings_path, '');

        }

         //Handle any necessary updates to the settings file

         //Get the current settings
         $current_settings = (array) $this;

          //Get the file's version
          $settings_file = $this->fetch();

          //Check for difference
          if(!($current_settings == $settings_file)){

              //Settings file is out of date, update it
              $this->update($current_settings);

          }

    }

    //Fetch settings
    public function fetch(){

        //Read the settings file
        $file_contents = file_get_contents($this->settings_path);

        //Decode the results
        if(!(empty($file_contents))){

            $settings = json_decode($file_contents);

        }else{

            //There is nothing to fetch so return false
            return false;

        }

        //Return the results, as an array
        return (array) $settings;

    }

    //Update settings
    public function update($settings){

        //Encode the settings
        $file_contents = json_encode($settings);

        //Write the settings
        file_put_contents($this->settings_path, $file_contents);


    }

}