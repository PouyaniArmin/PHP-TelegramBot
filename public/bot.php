<?php

use Bot\Api;
use Bot\TelegramBot;
use Models\Channels;
use Models\User;
require_once __DIR__ . "/../vendor/autoload.php";

$telBot = new TelegramBot(new Api, new User, new Channels);
$telBot->startBot();
