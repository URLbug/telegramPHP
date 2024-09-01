<?php

namespace database\migration;

use database\Connector;
use Generator;
use PDO;

class Migrate implements MigrateInterface
{
    private PDO $conn;
    private string $table;

    function __construct(string $table = '')
    {
        $conn = new Connector();

        $this->conn = $conn->getConn();
        $this->table = $table;
    }

    function create(array $params): bool|int
    {
        $params = join(', ', $params);

        return $this->conn->exec('CREATE TABLE ' . $this->table . '(' . $params  .');');
    }

    function drop(array $tables): Generator
    {
        foreach($tables as $table)
        {
            yield $this->conn->exec('DROP TABLE ' . $table . ';');
        }
    }

    function getTable(): string
    {
        return $this->table;
    }
}