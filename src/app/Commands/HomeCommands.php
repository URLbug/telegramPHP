<?php

namespace app\Commands;

use TelegramBot\Api\Client;
use TelegramBot\Api\Types\Message;

class HomeCommands
{
    private Client $bot;

    function __construct(Client $bot)
    {
        $this->bot = $bot;
    }

    function index(Message $message)
    {
        $this->bot->sendMessage($message->getChat()->getId(),  'Hello, world!');
    }
}