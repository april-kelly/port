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
 * Name:
 * Description:
 * Date:        1/9/14
 * Programmer:  Liam Kelly
 */


//Send error header
header($_SERVER['SERVER_PROTOCOL'].'505 Internal Server Error');

?>
<html>

    <head>

        <title>Error 505 | <?php echo $settings['page_title']; ?></title>

        <link href="./includes/views/themes/<?php echo $theme->dir_name ?>/styles/styles.css" rel="stylesheet"/>

    </head>

    <body>

        <h1>505, Internal Server Error</h1>
        <p>
            <h3>We are having some issues with our service right now. Please come back later.</h3>
            <img src="./includes/views/themes/<?php echo $theme->dir_name; ?>/images/derpy.png" alt="Derpy Hooves" title="Derpy Hooves"/>
            <br/>If you see this pony, tell her a datacenter is no place for muffins.<br />
            Please not I do not hold the copyright for this image, credit goes to <a href="http://www.deviantart.com/art/Derpy-404-326148742">aman692</a> on DeviantArt.
        </p>

    </body>

</html>

