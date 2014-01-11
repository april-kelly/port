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
 * Name:        Installation
 * Description: Installs the Foundation Framework
 * Date:        1/9/14
 * Programmer:  Liam Kelly
 */

//Includes
require_once('../../path.php');
require_once(ABSPATH.'includes/models/settings.php');
require_once(ABSPATH.'includes/models/protected_settings.php');
require_once(ABSPATH.'includes/models/debug.php');
require_once(ABSPATH.'includes/controllers/build_tables.php');

//Build the tables
build_tables();

//Include after db setup
require_once(ABSPATH.'includes/models/users.php');
require_once(ABSPATH.'includes/models/groups.php');
require_once(ABSPATH.'includes/models/pages.php');
 