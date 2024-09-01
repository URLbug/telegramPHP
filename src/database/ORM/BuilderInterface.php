<?php

namespace database\ORM;

interface BuilderInterface
{
    function get();
    function update(array $row, array $data);
    function create(array $row, array $data);
}