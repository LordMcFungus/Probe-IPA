<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 08.11.2017
 * Time: 09:48
 */

require_once 'inseratModel.php';
require_once '../controller/validator.php';

class InseratController
{
    private $model;
    private $validator;


    public function __construct()
    {
        $this->model = new inseratModel();
    }

    public function createInserat(string $title, string $description, string $mail, string $phone, string $place, string $type)
    {
        $this->validator = new validator();
        $isInputValid = $this->validator->inseratInputValid($title, $description, $mail, $phone, $place, $type);
        if($isInputValid)
        {
            $this->model->insertInserat($title, $description, $mail, $phone, $place, $type);
        }
    }
}