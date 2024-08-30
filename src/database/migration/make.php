<?php

require_once  $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use database\migration\Migrate;

$users = new Migrate('users');

$users->create([
    'usersId INT AUTO_INCREMENT',
    'name VARCHAR(30)',
    'password VARCHAR(250)',
    'age INT',
    'session VARCHAR(250)',
    'PRIMARY KEY(usersId)',
]);