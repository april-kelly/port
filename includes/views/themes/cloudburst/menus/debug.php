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
 * Name:        The Debugging menu
 * Description: Offers debugging information and tools
 * Date:        2/6/14
 * Programmer:  Liam Kelly
 */

?>

<p>

    <b>Status</b><hr />
    <br />

    Welcome to <?php echo $settings['product_name']; ?>
    <?php echo $settings['version']; ?>
    <?php echo $settings['version_type']; ?>!
    <br />

    Powered by The <?php echo $settings['foundation_product_name']; ?>
    version <?php echo $settings['foundation_version']; ?>
    <?php echo $settings['foundation_version_type']; ?>.
    <br />
    <br />


    <b>Extended release info</b>
    <hr />

    <pre>
    P-Series release:       Yes<br />
    Ponification:           Disabled<br />
    Release type:           Pre-Alpha<br />
    Debugging:              Enabled<br />
    Developer tools:        Enabled<br />
    </pre>


    <b>Settings Dump</b><br /><br />
<hr />

    <b>JSON: </b>
        <pre>

            <?php

                echo file_get_contents(ABSPATH.'includes/data/settings.json');

            ?>

        </pre>
    <br />

    <b>Key-Value Pairs: </b><br />
    <pre>
    <?php

        foreach($settings as $key => $value){
            echo $key.' => '.$value."\r\n\r\n";
        }

    ?>
    </pre>
</p>