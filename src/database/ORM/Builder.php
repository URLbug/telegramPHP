<?php

namespace database\ORM;


class Builder
{
    protected string $query = '';

    function select(array $row, string $table)
    {
        $newrow = [];

        foreach($row as $r)
        {
            $newrow[] = "`$r`";
        }

        $this->query .= 'SELECT ' . join(',', $newrow) . " FROM `$table`";

        return $this;
    }

    function where(string $row, string $args, mixed $data)
    {
        $data = htmlspecialchars($data);

        $this->query .= "WHERE `$row` $args `$data`";

        return $this;
    }

    function get()
    {
        $result = new ORM();

        return $result->query($this->query . ';');
    }
}