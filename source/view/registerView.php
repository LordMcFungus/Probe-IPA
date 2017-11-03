<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 09:31
 */


echo '<div id="LoginContent">
    <h1 id="RegisterTitle">Registrieren</h1>

    <form onsubmit="register(); return false;" id="registerform">
        <label for="RegisterUsername" class="RegisterLabel">Benutzername</label> <br />
        <input type="text" id="RegisterUsername" name="RegisterUsername" class="RegisterInput" required="required"> <br />

        <label for="Name" class="RegisterLabel">Name</label> <br />
        <input type="text" id="Name" name="Name" class="RegisterInput" > <br />

        <label for="Surname" class="RegisterLabel">Vorname</label> <br />
        <input type="text" id="Surname" name="Surname" class="RegisterInput" > <br />

        <label for="Mail" class="RegisterLabel">E-Mail</label> <br />
        <input type="email" id="Mail" name="Mail" class="RegisterInput"> <br />

        <label for="Phone" class="RegisterLabel">Telefon</label> <br />
        <input type="tel" id="Phone" name="Phone" class="RegisterInput"> <br />

        <label for="RegisterPassword" class="RegisterLabel">Passwort</label> <br />
        <input pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@!%*?&_-])[A-Za-z\d$@!%*?&_-]{8,}"
               title="Mindestens 8 Zeichen lang. Inklusive Sonderzeichen, Grossbuchstaben und Zahlen." type="password"
               id="RegisterPassword" name="RegisterPassword" class="RegisterInput"> <br/>

        <label for="RepPassword" class="RegisterLabel">Passwort Wiederholen</label> <br />
        <input pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@!%*?&_-])[A-Za-z\d$@!%*?&_-]{8,}"
               title="Mindestens 8 Zeichen lang. Inklusive Sonderzeichen, Grossbuchstaben und Zahlen." type="password"
               id="RepPassword" name="RepPassword" class="RegisterInput" > <br/>

        <input type="reset" name="Abbrechen" class="RegisterButton" id="Reset" value="Abbrechen">
        <input type="submit" name="Registrieren" class="RegisterButton" id="Submit" value="Registrieren">

    </form>
</div>';