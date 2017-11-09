<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 09:41
 */
require_once "../model/userModel.php";
require_once "validator.php";

/**
 * Class registerController
 * Manages methods used for register an User
 */
class registerController
{
    private $model;
    private $validator;

    /**
     * registerController constructor.
     */
    public function __construct()
    {
        $this->model = new userModel();
        $this->validator = new validator();
    }

    /**
     * Manages the Userinput to register User
     * @param $username
     * @param $password
     * @param $repeatPassword
     * @param $surname
     * @param $name
     * @param $mail
     * @param $phone
     */
    public function registerUser($username, $password, $repeatPassword, $surname, $name, $mail, $phone)
    {

        $isInputValid = $this->validator->registerInputValid($username, $password, $repeatPassword, $surname, $name, $mail, $phone);

        if(!$isInputValid){
            echo "FEHLER";
            return;
        }

        if($this->model->registerUser($username, $password, $surname, $name, $mail, $phone)) {
            echo 'Success';
        }


    }


}