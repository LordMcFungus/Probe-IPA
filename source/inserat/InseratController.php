<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 08.11.2017
 * Time: 09:48
 */

require_once 'inseratModel.php';

class InseratController
{
    private $model;


    public function __construct()
    {
        $this->model = new inseratModel();
    }

    public function createInserat($title, $description, $mail, $phone, $place, $type)
    {

    }
}