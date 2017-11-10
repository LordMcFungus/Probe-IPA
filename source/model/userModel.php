<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 08:48
 */
require_once "database.php";
require_once "user.php";
require_once "../controller/mySession.php";

class userModel
{
    private $connection;
    private $mySession ;

    public function __construct()
    {
        $this->connection = database::getConnection();
        $this->mySession = mySession::getInstance();
    }

    public function registerUser(string $username, string $password, string $surname, string $name, string $mail, string $phone) {
        $hashedpassword = password_hash($password, PASSWORD_BCRYPT);

        try
        {
            $sql = "INSERT INTO `inserator`.`user` (`first_name`, `name`, `username`, `email`, `phone`, `pwd`) VALUES ('$surname', '$name', '$username', '$mail', '$phone', '$hashedpassword')";
            $stmt 	= $this->connection->prepare($sql); // Prevent MySQl injection. $stmt means statement
            $stmt->execute();
        } catch (PDOException $e) {
            echo "ERROR";
            return false;
        }

        //$user = new user($name, $surname, $username, $mail, $phone);

        $user = $this->loadUserByUsername($username);

        $this->mySession->setCurrentUser($user);


        return true;
    }


    public function isUserExisting(string $username) {
     /*   $sql 	= "SELECT id FROM user WHERE username ='$username'";
        $stmt 	= $this->connection->prepare($sql); // Prevent MySQl injection. $stmt means statement
        $stmt->execute();
*/

        /*
        if ( $stmt->() >=1)
        {
            return true;
        }
*/
        return true;

    }

    public function loadUserByUsername($username)
    {
        $sql 	= "SELECT * FROM user WHERE username ='$username'";
        $stmt 	= $this->connection->prepare($sql); // Prevent MySQl injection. $stmt means statement
        $stmt->execute();

        if ($stmt->rowCount() <= 0) {
           echo 'Error';
            return null;
        } else {
            return $stmt->fetch();
        }



    }
}