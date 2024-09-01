<?php

namespace app\Api;

use TelegramBot\Api\Client;
use config\Env;

final class ConnectorAPI implements ConnectorAPIINterface
{
    private Client $bot;

    function __construct()
    {
        $token = new Env;

        $this->bot = new Client($token->get('TOKEN'));
    }

    function getBot(): Client
    {
        return $this->bot;
    } 
}