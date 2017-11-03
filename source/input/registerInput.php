<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 09:43
 */

$username = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_STRING) ?? "";
$name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_STRING) ?? "";
$surname = filter_input(INPUT_POST, 'Surname', FILTER_SANITIZE_STRING) ?? "";
$mail = filter_input(INPUT_POST, 'Mail', FILTER_SANITIZE_EMAIL) ?? "";
$phone = filter_input(INPUT_POST, 'Phone', FILTER_SANITIZE_STRING) ?? "";
$password = filter_input(INPUT_POST, 'Password') ?? "";
$repeatPassword = filter_input(INPUT_POST, 'RepPassword') ?? "";

$controller = new registerController();

$controller->registerUser($username, $password, $repeatPassword, $surname, $name, $mail, $phone);