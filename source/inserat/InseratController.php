<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 08.11.2017
 * Time: 09:48
 */

require_once 'inseratModel.php';
require_once '../controller/validator.php';

/**
 * Class InseratController
 * Controller for methods concerning Inserate
 */
class InseratController
{
    private $model;
    private $validator;


    /**
     * InseratController constructor.
     */
    public function __construct()
    {
        $this->model = new inseratModel();
    }

    /**
     * Manages the creation of a new Inserat
     * @param string $title
     * @param string $description
     * @param string $mail
     * @param string $phone
     * @param string $place
     * @param string $type
     */
    public function createInserat(string $title, string $description, string $mail, string $phone, string $place, string $type)
    {
        $this->validator = new validator();
        $isInputValid = $this->validator->inseratInputValid($title, $description, $mail, $phone, $place, $type);
        if($isInputValid)
        {
            $this->model->insertInserat($title, $description, $mail, $phone, $place, $type);
        }
    }

    /**
     * Loads Inserate from Model an pass it to the View
     * @param $page
     * @return string
     */
    public function showInserate($page)
    {
        $page = (int)($page * 10) - 10;
        $inserate = $this->model->loadInserate($page);
        return $inserate;
    }

    /**
     * Returns total number of pages if pagelength is equals 10
     * @return int
     */
    public function getNumberOfPages()
    {
        $result = $this->model->loadInserateTotal();

        $numberOfInserates = $result['count'];

        $numberOfPages = $numberOfInserates % 10 >= 0 ?  ($numberOfInserates / 10) + 1 : $numberOfInserates / 10;

        return (int)$numberOfPages;
    }


}