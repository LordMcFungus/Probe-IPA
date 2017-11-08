<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 08:48
 */

require_once '../model/database.php';
require_once '../controller/mySession.php';

class inseratModel
{

    private $connection;
    private $mySession;

    public function __construct()
    {
        $this->connection = database::getInstance();
    }

    public function insertInserat($title, $description, $mail, $phone, $place, $type)
    {

        $this->mySession = mySession::getInstance();

        $user = $this->mySession->getCurrentUser();

        $date = date("Y-m-d H:i:s");
        $userId = $user['id'];
        $isActive = true;

        try
        {
            $sql = "INSERT INTO `inserator`.`inserat` (`name`, `type`, `description`, `location`, `email`, `phone`, `date`, `is_active`, `user_id`) VALUES ('$title', '$type', '$description', '$place', '$mail', '$phone', '$date', '$isActive', '$userId')";
            $stmt 	= $this->connection->prepare($sql); // Prevent MySQl injection. $stmt means statement
            $stmt->execute();
        } catch (mysqli_sql_exception $e) {
            echo "ERROR";
            return false;
        }
    }
}