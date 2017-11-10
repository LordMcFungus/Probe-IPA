<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 09:43
 */

require_once "registerController.php";

/**
 * Saintizes user Inputs, andgive it to the regsiterController
 */

$username = filter_input(INPUT_GET, 'Username', FILTER_SANITIZE_STRING) ?? "";
$name = filter_input(INPUT_GET, 'Name', FILTER_SANITIZE_STRING) ?? "";
$surname = filter_input(INPUT_GET, 'Surname', FILTER_SANITIZE_STRING) ?? "";
$mail = filter_input(INPUT_GET, 'Mail', FILTER_SANITIZE_EMAIL) ?? "";
$phone = filter_input(INPUT_GET, 'Phone', FILTER_SANITIZE_STRING) ?? "";
$password = filter_input(INPUT_GET, 'Password') ?? "";
$repeatPassword = filter_input(INPUT_GET, 'RepPassword') ?? "";


$controller = new registerController();

$controller->registerUser($username, $password, $repeatPassword, $surname, $name, $mail, $phone);