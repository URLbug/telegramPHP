<?php

namespace database\ORM;


class Builder
{
    private string $table;
    private ORM $orm;
    protected string $query = '';

    function __construct(string $table)
    {
        $this->table = $table;
        
        $this->orm = new ORM();
    }

    function select(array $row): Builder
    {
        $newrow = $this->arrayToString($row);

        $this->query .= 'SELECT ' . $newrow . ' FROM "' . $this->table . '"' . ' ';

        return $this;
    }

    function where(string $row, string $args, mixed $data): Builder
    {
        $data = htmlspecialchars($data);

        $this->query .= "WHERE $row $args $data" . ' ';

        return $this;
    }

    function get()
    {
        return $this->orm->query($this->query . ';');
    }

    function create(array $row, array $data): bool|int
    {
        $newrow = $this->arrayToString($row);
        $newdata = join(',', $data);

        $query = 'INSERT INTO "' . $this->table
        . '" (' . $newrow . ')'
        . ' VALUES(' . $newdata . ');';

        return $this->orm->getConn()->exec($query);
    }

    function update(array $row, array $data): Builder
    {
        $newrow = [];

        for($i=0; $i < count($row); $i++)
        {
            $newrow[] = htmlspecialchars($row[$i]) . '=' . $data[$i];
        }

        $this->query = 'UPDATE "' . $this->table . '" SET ' . join(',', $newrow) . ' ';

        return $this;
    }

    private function arrayToString(array $row): string
    {
        $newrow = [];

        foreach($row as $r)
        {
            $newrow[] = htmlspecialchars($r);
        }

        return join(',', $newrow);
    }
}