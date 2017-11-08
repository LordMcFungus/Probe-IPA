<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 09:31
 */

echo '<div id="LoginContent">
    <h1 id="RegisterTitle">Inserat Erfassen</h1>

    <form onsubmit="createInserat(); return false;" id="inseratForm">
        <label for="Title" class="RegisterLabel">Titel</label> <br />
        <input type="text" id="Title" name="Title" class="RegisterInput" required="required"> <br />

        <label for="Description" class="RegisterLabel">Beschreibung</label> <br />

        <textarea rows="4" cols="50" id="Description" name="Description" maxlength="500">
        </textarea><br />

        <label for="Mail" class="RegisterLabel">E-Mail</label> <br />
        <input type="email" id="Mail" name="Mail" class="RegisterInput"> <br />

        <label for="Phone" class="RegisterLabel">Telefon</label> <br />
        <input type="tel" id="Phone" name="Phone" class="RegisterInput"> <br />

        <label for="Place" class="RegisterLabel">Ort</label> <br />
        <input type="text" id="Place" name="Place" class="RegisterInput"> <br />

        <label for="Type" class="RegisterLabel">Art des Angebotes</label> <br />
        <input type="text" id="Type" name="Type" class="RegisterInput"> <br />



        <input type="reset" name="Abbrechen" class="RegisterButton" id="Reset" value="Abbrechen">
        <input type="submit" name="Registrieren" class="RegisterButton" id="Submit" value="Registrieren">

    </form>
</div>';