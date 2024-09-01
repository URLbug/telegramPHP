<?php

require_once './vendor/autoload.php';

use database\migration\Migrate;

$users = new Migrate('users');

$users->create([
    'userId SERIAL PRIMARY KEY',
    'username VARCHAR(250)',
    'first_name VARCHAR(250)',
    'last_name VARCHAR(250)',
    'cash DOUBLE precision',
]);