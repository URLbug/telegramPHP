<?php

require_once  $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use database\ORM\ORM;

$orm = ORM::build()->select(['ttt'], 'table');

var_dump($orm->get());