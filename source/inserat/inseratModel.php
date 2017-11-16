<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 08:48
 */

require_once '../model/database.php';
require_once '../controller/mySession.php';


/**
 * Class inseratModel
 * Datamodel Responsilbe for getting Inserat-datas from database and return it to InseratController
 */
class inseratModel
{

    private $connection;
    private $mySession;

    /**
     * inseratModel constructor.
     */
    public function __construct()
    {
        $this->connection = database::getConnection();
    }

    /**
     * Inserts Inserat into Database
     * @param $title
     * @param $description
     * @param $mail
     * @param $phone
     * @param $place
     * @param $type
     * @return bool
     */
    public function insertInserat($title, $description, $mail, $phone, $place, $type)
    {

        $this->mySession = mySession::getInstance();

        $user = $this->mySession->getCurrentUser();

        $date = date("Y-m-d H:i:s");
        $userId = $user['id'];
        $isActive = true;

        try
        {
            $this->connection->beginTransaction();
            $sql = "INSERT INTO `inserator`.`inserat` (`name`, `type`, `description`, `location`, `email`, `phone`, `date`, `is_active`, `user_id`) VALUES ('$title', '$type', '$description', '$place', '$mail', '$phone', '$date', '$isActive', '$userId')";
            $stmt 	= $this->connection->prepare($sql); // Prevent MySQl injection. $stmt means statement
            $stmt->execute();
            $this->connection->commit();
        } catch (mysqli_sql_exception $e) {
            $this->connection->rollBack();
            echo "ERROR";
            return false;
        }
        echo "Success";
    }

    /**
     * Loads 10 Inserate from a defined Start, ordered by Date
     * @param int $start
     * @return string
     */
    public function loadInserate(int $start)
    {
        $sql = "SELECT inserat.name, inserat.type, inserat.location, inserat.id FROM inserat ORDER BY inserat.date DESC LIMIT $start,10";
        $stmt 	= $this->connection->prepare($sql); // Prevent MySQl injection. $stmt means statement
        $stmt->execute();

        $outputString = "";

        while ($row = $stmt->fetch())
        {
            $name = $row['name'];
            $type = $row['type'];
            $location = $row['location'];
            $id = $row['id'];

            $outputString = $outputString."<div class='inseratPreview'>
                               <a href='inserat/inserat.php?id=$id'>
                               <h2>$name</h2>
                               <p>$type</p>
                               <p>$location</p></a>
                          </div>";
        }

        return $outputString;



    }

    /**
     * Returns a specific Inserat from the database, identified by its ID
     * @param $id
     * @return mixed
     */
    public function loadInserateById($id)
    {
        $sql = "SELECT inserat.name, inserat.type, inserat.location, inserat.description, inserat.email, inserat.phone FROM inserat where inserat.id = '$id' and is_active = 1";
        $stmt 	= $this->connection->prepare($sql); // Prevent MySQl injection. $stmt means statement
        $stmt->execute();

        return $stmt->fetch();

    }

    /**
     * Returns total ammount of active Inserate stored in the Database.
     * @return mixed
     */
    public function loadInserateTotal()
    {
        $sql = "SELECT count(id) as 'count' FROM inserat where is_active = 1";
        $stmt 	= $this->connection->prepare($sql); // Prevent MySQl injection. $stmt means statement
        $stmt->execute();

        return $stmt->fetch();
    }
}