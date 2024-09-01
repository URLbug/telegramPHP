<?php

namespace database\ORM;

interface ORMInterface
{
    static function build(string $table): BuilderInterface;   
    function query(string $query);   
}