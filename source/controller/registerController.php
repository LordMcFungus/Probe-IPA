<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 09:41
 */
require_once "../model/userModel.php";
require_once "validator.php";

class registerController
{
    private $model;
    private $validator;

    public function __construct()
    {
        $this->model = new userModel();
        $this->validator = new validator();
    }

    public function registerUser($username, $password, $repeatPassword, $surname, $name, $mail, $phone)
    {


        $isInputValid = $this->validator->registerInputValid($username, $password, $repeatPassword, $surname, $name, $mail, $phone);

        if(!$isInputValid){
            echo "FEHLER";
            return;
        }

        $this->model->registerUser($username, $password, $surname, $name, $mail, $phone);


    }


}