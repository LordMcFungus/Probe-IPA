<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 08:48
 */
require_once "database.php";

class userModel
{
    private $connection;

    public function __construct()
    {
        $this->connection = database::getConnection();
    }

    public function registerUser() {
        //INSERT INTO `inserator`.`user` (`first_name`, `name`, `username`, `email`, `phone`, `pwd`) VALUES ('Test', 'Test', 'test', 'test', 'test', 'test');

    }

    public function getUserByUsername() {

    }

    public function isUserExisting(string $username) {
        $sql 	= "SELECT id FROM user WHERE username ='$username'";
        $stmt 	= $this->connection->prepare($sql); // Prevent MySQl injection. $stmt means statement
        $stmt->execute();

        if ( $stmt->columnCount() >=1)
        {
            return true;
        }

        return false;

    }
}