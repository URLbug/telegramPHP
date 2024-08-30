<?php

namespace database;

use config\Env;
use config\EnvInterface;
use PDO;

class Connector
{
    private PDO $conn;

    function __construct()
    {
        $this->conn = $this->connectDatabase(new Env());
    }

    function getConn(): PDO
    {
        return $this->conn;
    }

    private function connectDatabase(EnvInterface $env): PDO
    {
        $host = $env->get('HOST');
        $dbname = $env->get('DATABASE');

        return new PDO(
            'pgsql:host=' . $host . ';dbname=' . $dbname, 
            $env->get('DATABASE_USER'), 
            $env->get('DATABASE_PASSWORD')
        );
    }
}
