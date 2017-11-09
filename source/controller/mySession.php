<?php

/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 04.11.2017
 * Time: 18:19
 */

/**
 * Class mySession
 * Singelton to manage the Session
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

    /**
     * Returns instance of itself. If an Instance already exists return this
     * @return mySession
     *
     */
    public static function getInstance()
    {
        if (!self::$instance) { // If no instance then create one
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Set the session-value for current user
     * @param $user User to be stored in the sessionfield 'user'
     */
    public function setCurrentUser($user)
    {
        $_SESSION['CurrentUser'] = $user;
    }

    /**
     * Returns the set user of the session. If it doesn't exists return null
     * @return $_SESSION['CurrentUser']
     */
    public function getCurrentUser()
    {
        return isset($_SESSION['CurrentUser']) ? $_SESSION['CurrentUser'] : null;
    }

    /**
     * Destroys current session
     */
    public function destroySession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        session_destroy();
    }
}