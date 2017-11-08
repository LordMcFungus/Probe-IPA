<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 04.11.2017
 * Time: 18:19
 */
class mySession
{
    private static $instance;

    /**
     * SessionHandler constructor.
     */
    private function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) { // If no instance then create one
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @param $user User to be stored in the sessionfield 'user'
     */
    public function setCurrentUser($user)
    {
        $_SESSION['CurrentUser'] = $user;
    }

    public function getCurrentUser()
    {
        return isset($_SESSION['CurrentUser']) ? $_SESSION['CurrentUser'] : null;
    }

    public function destroySession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        session_destroy();
    }
}