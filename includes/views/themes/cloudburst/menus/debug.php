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
    <?php

    foreach($settings as $key => $value){
        echo '<span style="text-align: left;">'.$key.'</span>';
        echo '<span style="text-align: center;"> => </span>';
        echo '<span style="text-align: right;">'.$value.'</span>';
        echo '<br/>';
    }
    ?>
</p>