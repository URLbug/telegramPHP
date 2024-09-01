<?php

ini_set('display_errors', 1);

require_once './vendor/autoload.php';

use app\Api\ConnectorAPI;
use app\Commands\HomeCommands;
use config\Env;
use TelegramBot\Api\Exception;
use TelegramBot\Api\Types\Message;

$env = new Env();

$bot = new \TelegramBot\Api\Client($env->get('TOKEN'));
// or initialize with botan.io tracker api key
// $bot = new \TelegramBot\Api\Client('YOUR_BOT_API_TOKEN', 'YOUR_BOTAN_TRACKER_API_KEY');


$bot->command('ping', function ($message) use ($bot) {
    $bot->sendMessage($message->getChat()->getId(), 'pong!');
});

$bot->run();

