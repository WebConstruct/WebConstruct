<?php

namespace WebConstruct\Core\Database;

class DatabaseSettings
{
    /**
     * @return static
     */
    final public static function singleton()
    {
        return new static();
    }

    public $host;
    public $port;
    public $database;
    public $username;
    public $password;
}