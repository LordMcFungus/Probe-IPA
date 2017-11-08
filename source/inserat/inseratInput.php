<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 08.11.2017
 * Time: 09:48
 */

require_once 'InseratController.php';

$title = filter_input(INPUT_GET, 'Title', FILTER_SANITIZE_STRING) ?? "";
$description = filter_input(INPUT_GET, 'Description', FILTER_SANITIZE_STRING) ?? "";
$mail = filter_input(INPUT_GET, 'Mail', FILTER_SANITIZE_EMAIL) ?? "";
$phone = filter_input(INPUT_GET, 'Phone', FILTER_SANITIZE_STRING) ?? "";
$place = filter_input(INPUT_GET, 'Place', FILTER_SANITIZE_STRING) ?? "";
$type = filter_input(INPUT_GET, 'Type', FILTER_SANITIZE_STRING) ?? "";


$controller = new InseratController();

$controller->createInserat($title, $description, $mail, $phone, $place, $type);