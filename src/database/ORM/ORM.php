<?php

namespace database\ORM;

use database\Connector;
use PDO;

class ORM
{
    private PDO $conn;
    function __construct()
    {
        $connect = new Connector();

        $this->conn = $connect->getConn();
    }

    static function query(string $query)
    {
        $result = self::$conn->query($query);

        while($row = $result->fetch())
        {
            return $row;
        }
    }

    static function build()
    {
        return new Builder();
    }
}