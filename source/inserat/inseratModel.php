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
        $this->connection = database::getConnection();
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

    public function loadInserate($start)
    {
        $sql = "SELECT inserat.name, inserat.type, inserat.location, inserat.id FROM inserat ORDER BY inserat.date LIMIT 0,10";
        $stmt 	= $this->connection->prepare($sql); // Prevent MySQl injection. $stmt means statement
        $stmt->execute();


        $echobolo = "";

        while ($row = $stmt->fetch())
        {
            $name = $row['name'];
            $type = $row['type'];
            $location = $row['location'];
            $id = $row['id'];

            $echobolo = $echobolo."<div class='inseratPreview'>
                               <a href='inserat/inserat.php?id=$id'>
                               <h2>$name</h2>
                               <p>$type</p>
                               <p>$location</p></a>
                          </div>";
        }

        return $echobolo;



    }

    public function loadInserateById($id)
    {
        $sql = "SELECT inserat.name, inserat.type, inserat.location, inserat.description, inserat.email, inserat.phone FROM inserat where inserat.id = '$id'";
        $stmt 	= $this->connection->prepare($sql); // Prevent MySQl injection. $stmt means statement
        $stmt->execute();

        return $stmt->fetch();

    }
}