<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 08.11.2017
 * Time: 08:49
 */

require_once "LoginController.php";

$username = filter_input(INPUT_GET, 'Username', FILTER_SANITIZE_STRING) ?? "";
$password = filter_input(INPUT_GET, 'Password') ?? "";

$controller = new LoginController();

$controller->loginPerson($username, $password);