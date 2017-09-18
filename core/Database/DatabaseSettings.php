<?php

namespace WebConstruct\Core\Database;

class DatabaseSettings
{
    private static $instance;
    /**
     * @return static
     */
    final public static function singleton()
    {
        if(!self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public $host;
    public $port;
    public $database;
    public $username;
    public $password;
}