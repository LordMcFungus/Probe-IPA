<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 09:27
 */

require_once '../controller/mySession.php';
require_once '../model/userModel.php';

class LoginController
{
    private $customSession;
    private $model;

    public function loginPerson($username, $password)
    {
        $user = $this->model->loadUserByUsername($username);

        if($user) {
            $passwordCorrect = password_verify($password, $user['password']);

            if ($passwordCorrect) {

                $this->customSession->setCurrentUser($user['username']);
                echo 'Success';
                return;
            }
        }

        //Code wrong
        $this->loginError();
        return;
    }


    private function checkPassword(){
        //password_verify ( string $password , string $hash )
    }

    public function __construct()
    {
        $this->customSession = mySession::getInstance();
        $this->model = new userModel();
    }

    public function logout() {
        $this->customSession->destroySession();
    }

    private function loginError()
    {
        echo 'error';
    }
}