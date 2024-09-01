<?php

namespace app\Api;

use TelegramBot\Api\Client;

interface ConnectorAPIINterface
{
    function getBot(): Client;
}