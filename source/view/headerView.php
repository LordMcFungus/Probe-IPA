<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 09:31
 */

require_once "../model/user.php";
require_once "../controller/mySession.php";

$currentSession = mySession::getInstance();

$user = $currentSession->getCurrentUser();

if($user) {
    echo "
        <div>
            <H1>Hallo $user</H1>
        </div>
        <div id=\"headerButtonContainer\">
           <a onclick=\"showMyInserate()\" class=\"headerButton\" id=\"myInserateButton\">Meine Inserate</a>
           <a onclick=\"makeInserat()\" class=\"headerButton\" id=\"makeInseratButton\">Inserat erfassen</a>
           <a onclick=\"logout()\" class=\"headerButton\" id=\"logoutButton\">Logout</a>
        </div>
        <div class=\"floatClear\"></div>'";
} else {
    echo ' <div id="headerButtonContainer">
           <a onclick="showLogin()" class="headerButton" id="loginButton">Login</a>
           <a onclick="showRegister()" class="headerButton" id="registerButton">Registrieren</a>
        </div>
        <div class="floatClear"></div>';
}
