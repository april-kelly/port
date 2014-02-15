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
 * Name:        Make Readable
 * Description: Converts boolean values to more human friendly forms
 * Date:        2/6/14
 * Programmer:  Liam Kelly
 */

//Answer like Big Macintosh from My Little Pony : Friendship is Magic
function big_macintosh($value){
    if($value == true){
        echo 'Eeyup!';
    }
    if($value == false){
        echo 'Nope.';
    }
    if($value == null){
        echo 'Umm.';
    }
}

//Answer Yes or No
function yes_no($value){
    if($value == true){
        echo 'Yes';
    }
    if($value == false){
        echo 'No';
    }
    if($value == null){
        echo 'Not Set';
    }
}

//Answer True or False
function true_false($value){
    if($value == true){
        echo 'True';
    }
    if($value == false){
        echo 'False';
    }
    if($value == null){
        echo 'Null';
    }
}

//Answer Enabled or Disabled
function enabled_disabled($value){
    if($value == true){
        echo 'Enabled';
    }
    if($value == false){
        echo 'Disabled';
    }
    if($value == null){
        echo 'Not Set';
    }
}