<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 11:05
 */
class database
{
    public function getDbConnection(){
        try
        {
            $pdo = new PDO('mysql:host=localhost;dbname=inserator', 'root', '');

        }
        catch (PDOException $e)
        {
            echo 'Error: ' . $e->getMessage();
            exit();
        }
        echo 'Connected to MySQL';
    }
}