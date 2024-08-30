<?php

require_once  $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use database\migration\Migrate;

$users = new Migrate();

$users->drop([
    'users',
]);