<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 14:17
 */
require_once "../model/userModel.php";

/**
 * Class validator
 * Class to manage the Input Validators
 */
class validator
{
    /**
     * Validates the inputs used for register
     * @param string $username
     * @param string $password
     * @param string $repeatPassword
     * @param string $surname
     * @param string $name
     * @param string $mail
     * @param string $phone
     * @return bool
     */
    public function registerInputValid(string $username, string $password, string $repeatPassword, string $surname, string $name, string $mail, string $phone)
    {
        $model = new userModel();
        $passwordRegularExpression = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@!%*?&_-])[A-Za-z\d$@!%*?&_-]{8,}/';

        $usernameValid = strlen($username) < 40 && strlen($username) > 1;

        $usernameUnique = $model->isUserExisting($username);

        $passwordValid = $password == $repeatPassword; //&& preg_match($passwordRegularExpression, $password);

        $surnameValid = strlen($surname) < 40 && strlen($surname) > 1;

        $nameValid = strlen($name) < 40 && strlen($name) > 1;

        $mailValid = filter_var($mail, FILTER_VALIDATE_EMAIL);

        $phoneValid = strlen($phone) <= 20 && strlen($phone) >= 10;

        $validationResults = array('Username' => $usernameValid, 'Username2' =>$usernameUnique, 'Password' => $passwordValid, 'Surname' => $surnameValid, 'Name' => $nameValid, 'Email' => $mailValid != "", "Phone" => $phoneValid);

        foreach ($validationResults as $key => $value) {
            if(!$value) {
                echo $key;
                return false;
                //TODO: manage the faulty input
            }
        }
        return true;
    }

    /**
     * Validates the Input used for creating a new Inserat
     * @param string $title
     * @param string $description
     * @param string $mail
     * @param string $phone
     * @param string $place
     * @param string $type
     * @return bool
     */
    public function inseratInputValid(string $title, string $description, string $mail, string $phone, string $place, string $type)
    {
        $titleValid = strlen($title) < 50 && strlen($title) > 1;
        $descriptionValid = strlen($description) < 500 && strlen($description) > 1;
        $mailValid = filter_var($mail, FILTER_VALIDATE_EMAIL);
        $phoneValid = strlen($phone) <= 20 && strlen($phone) >= 10;
        $placeValid = strlen($place) < 50 && strlen($place) > 1;
        $typeValid = strlen($type) < 45 && strlen($type) > 1;


        $validationResults = array('Title' => $titleValid, 'Description' =>$descriptionValid, 'mail' => $mailValid != "", 'Phone' => $phoneValid, 'Place' => $placeValid, 'Type' => $typeValid);

        foreach ($validationResults as $key => $value) {
            if(!$value) {
                echo $key;
                return false;
            }
        }
        return true;


    }
}