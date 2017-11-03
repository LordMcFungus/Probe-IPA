<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 03.11.2017
 * Time: 11:05
 */
class database
{
    private static $instance;
    private $conn;

    /**
     * Database constructor.
     */
    private function __construct()
    {
        try
        {
            $this->conn = new PDO('mysql:host=localhost;dbname=inserator', 'root', '');

        }
        catch (PDOException $e)
        {
            echo 'Error: ' . $e->getMessage();
            exit();
        }
    }

    public static function getConnection()
    {
        return self::getInstance()->conn;
    }

    public static function getInstance()
    {
        if (!self::$instance) { // If no instance then create one
            self::$instance = new self();
        }
        return self::$instance;
    }
}