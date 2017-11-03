<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 09:41
 */
require_once "../model/userModel.php";

class registerController
{

    public function registerUser($username, $password, $repeatPassword, $surname, $name, $mail, $phone)
    {
        $model = new userModel();

        if(!$model -> isUserExisting($username)){
            $swag = "successeration $username";
            echo $swag;
        } else {
            echo 'gungusch';
        }


    }
}