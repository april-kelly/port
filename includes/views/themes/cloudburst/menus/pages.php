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
 * Name:        Page settings menu
 * Description: Page settings menu
 * Date:        4/6/14
 * Programmer:  Liam Kelly
 */

?>
<h3>Page Settings</h3>

<form action="/<?php echo $base_dir; ?>/includes/controllers/page_update.php" method="post">

    <b>Add Page</b><br />

    <label for="name">name: </label>
    <input type="text" name="name" id="name" />
    <br />

    <label for="path">path </label>
    <input type="text" name="path" id="path" />
    <br />

    <label for="div_id">div_id</label>
    <input type="text" name="div_id" id="div_id" />
    <br />

    <label for="parameters">parameters</label>
    <input type="text" name="parameters" id="parameters" />
    <br />

    <input type="submit" value="Add" id="Add" />

    <hr />




    <b>Update Page</b><br />

    <label for="name">name: </label>
    <input type="text" name="name" id="name" />
    <br />

    <label for="path">path </label>
    <input type="text" name="path" id="path" />
    <br />

    <label for="div_id">div_id</label>
    <input type="text" name="div_id" id="div_id" />
    <br />

    <label for="parameters">parameters</label>
    <input type="text" name="parameters" id="parameters" />
    <br />

    <input type="submit" value="Update" id="Update" />

    <hr />




    <b>Delete Page</b><br />

    <input type="submit" value="Delete" />

    <hr />

</form>