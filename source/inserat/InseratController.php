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

    public function showInserate($page)
    {
        $page = (int)($page * 10) - 10;
        $inserate = $this->model->loadInserate($page);
        return $inserate;
    }

    public function getNumberOfInserates()
    {
        $result = $this->model->loadInserateTotal();

        $numberOfInserates = $result['count'];

        $numberOfPages = $numberOfInserates % 10 >= 0 ?  ($numberOfInserates / 10) + 1 : $numberOfInserates / 10;

        return (int)$numberOfPages;
    }


}