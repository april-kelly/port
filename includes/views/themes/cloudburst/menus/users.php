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
 * Name:        The user management menu
 * Description: Allows administrator(s) to manage users
 * Date:        2/6/14
 * Programmer:  Liam Kelly
 */

//$users->add_user('firstname', 'lastname', 'username', 'password');
?>

<b>Add User:</b>

    <div class="form">

        <form action="" method="post">

            <table border="0">

                <tr>
                    <td><label for="firstname">Firstname: </label></td>
                    <td><input type="text" name="firstname" id="lastname" /></td>
                </tr>

                <tr>
                    <td><label for="lastname">Lastname:  </label></td>
                    <td><input type="text" name="lastname" id="lastname" /></td>
                </tr>

                <tr>
                    <td><label for="username">Username:  </label></td>
                    <td><input type="text" name="username" id="username" /></td>
                </tr>

                <tr>
                    <td><label for="passwordI">Password:  </label></td>
                    <td><input type="password" name="passwordI" id="passwordI" /></td>
                </tr>

                <tr>
                    <td><label for="passwordII">(again):  </label></td>
                    <td><input type="password" name="passwordII" id="passwordII" /></td>
                </tr>

                <tr>
                    <td><input type="submit" value="Add" /></td>
                    <td></td>
                </tr>

            </table>

        </form>

    </div>

<hr />

<b>Update User:</b>

    <div class="form">

    <form action="" method="post">

        <table border="0">

            <tr>
                <td><label for="select">Select a user: </label></td>
                <td>
                    <select name="select" id="select">
                        <option value="user_id goes here">Select one</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="firstname">Firstname: </label></td>
                <td><input type="text" name="firstname" id="lastname" /></td>
            </tr>

            <tr>
                <td><label for="lastname">Lastname:  </label></td>
                <td><input type="text" name="lastname" id="lastname" /></td>
            </tr>

            <tr>
                <td><label for="username">Username:  </label></td>
                <td><input type="text" name="username" id="username" /></td>
            </tr>

            <tr>
                <td><label for="passwordI">Password:  </label></td>
                <td><input type="password" name="passwordI" id="passwordI" /></td>
            </tr>

            <tr>
                <td><label for="passwordII">(again):  </label></td>
                <td><input type="password" name="passwordII" id="passwordII" /></td>
            </tr>

            <tr>
                <td><input type="submit" value="Update" /></td>
                <td></td>
            </tr>

        </table>

    </form>

</div>

<hr />

<b>Delete User:</b>

    <div class="form">

    <form action="" method="post">

        <select name="select" id="select">
            <option value="user_id goes here">Select one</option>
        </select>

        <input type="submit" value="Delete" />

    </form>

</div>

