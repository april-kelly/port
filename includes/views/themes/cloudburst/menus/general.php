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
 * Name:        General Settings Menu
 * Description: General Settings Menu
 * Date:        4/6/14
 * Programmer:  Liam Kelly
 */


?>

<?php

    if(isset($_SESSION['saved'])){
        unset($_SESSION['saved']);
        echo '<span class="success"><b>Info:</b> Save was successful</span><br /><br />';
    }

?>

<form action="/<?php echo $base_dir; ?>/includes/controllers/save.php" method="post">

    <?php

    foreach($settings as $key => $value){

        echo '<label for="'.$key.'">'.$key.'</label>';
        echo '<input type="text" name="'.$key.'" value="'.$value.'" /><br />';

    }

    ?>

    <input type="submit" />


</form>