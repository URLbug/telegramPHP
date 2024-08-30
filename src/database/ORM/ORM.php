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

    function query(string $query)
    {
        $result = $this->conn->query($query);

        while($row = $result->fetch())
        {
            return $row;
        }
    }

    function getConn()
    {
        return $this->conn;
    }

    static function build(string $table)
    {
        return new Builder($table);
    }
}