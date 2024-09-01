<?php

namespace database\ORM;

use database\Connector;
use PDO;

class ORM implements ORMInterface
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

    function getConn(): PDO
    {
        return $this->conn;
    }

    static function build(string $table): BuilderInterface
    {
        return new Builder($table);
    }
}