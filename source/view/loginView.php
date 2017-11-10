<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 10:56
 */

echo '<form id="loginform" onsubmit="login(); return false;">

                <label for="Username" class="LoginLabel">Benutzername</label> <br />
                <input type="text" id="Username" name="Username" class="LoginInput" required="required"> <br />

                <label for="Password" class="LoginLabel">Passwort</label> <br />
                <input type="password" id="Password" name="Password" class="LoginInput" required="required"> <br />

                <input type="reset"  class="ResetButton" id="ResetLogin" value="Abbrechen">
                <input type="submit" class="SubmitButton" id="SubmitLogin" value="Einloggen">

            </form>
            <div id="loginErrorContainer"></div>';