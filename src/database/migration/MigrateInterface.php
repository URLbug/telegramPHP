<?php

namespace database\migration;

use Generator;

interface MigrateInterface
{
    function create(array $params): bool|int;
    function drop(array $tables): Generator;
}