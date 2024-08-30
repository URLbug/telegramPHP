<?php

require_once './vendor/autoload.php';

use database\migration\Migrate;

$users = new Migrate();

$users->drop([
    'users',
]);