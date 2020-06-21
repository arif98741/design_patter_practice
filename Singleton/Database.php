<?php


class Database
{
    public static $instance;


    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (!isset(Database::$instance))
            Database::$instance = new Database();
        return self::$instance;
    }

    /**
     * @param null $query
     */
    public function getQuery($query = NULL)
    {
        return $query;
    }
}

