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
        <label for="RegisterUsername" class="RegisterLabel">Titel</label> <br />
        <input type="text" id="RegisterUsername" name="RegisterUsername" class="RegisterInput" required="required"> <br />

        <label for="Name" class="RegisterLabel">Beschreibung</label> <br />

        <textarea rows="4" cols="50" id="Name" name="Name" maxlength="500">
        </textarea><br />

        <label for="Surname" class="RegisterLabel">Vorname</label> <br />
        <input type="text" id="Surname" name="Surname" class="RegisterInput" > <br />

        <label for="Mail" class="RegisterLabel">E-Mail</label> <br />
        <input type="email" id="Mail" name="Mail" class="RegisterInput"> <br />

        <label for="Phone" class="RegisterLabel">Telefon</label> <br />
        <input type="tel" id="Phone" name="Phone" class="RegisterInput"> <br />

        <label for="Ort" class="RegisterLabel">Ort</label> <br />
        <input type="text" id="Ort" name="Ort" class="RegisterInput"> <br />

        <label for="Art" class="RegisterLabel">Art des Angebotes</label> <br />
        <input type="text" id="Art" name="Art" class="RegisterInput"> <br />



        <input type="reset" name="Abbrechen" class="RegisterButton" id="Reset" value="Abbrechen">
        <input type="submit" name="Registrieren" class="RegisterButton" id="Submit" value="Registrieren">

    </form>
</div>';