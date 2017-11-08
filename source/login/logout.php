<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 08.11.2017
 * Time: 08:38
 */

require_once 'LoginController.php';

$loginController = new LoginController();

$loginController->logout();

require_once '../view/allInserateView.php';