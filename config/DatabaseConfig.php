<?php


namespace Config;

use Dotenv\Dotenv;
use Exception;
use MongoDB\Client;
use Utilities\ErrorHandler;

class DatabaseConfig
{

    private string $mongo_url;
    public function __construct()
    {
        $this->initDotEnv();
    }



    private function connectToMongo(): Client
    {
        $client = new Client($this->mongo_url);
        $client->listDatabases();
        return $client;
    }
    /**
     * load enviroment variable from .env file.
     * This method uses the Dotenv package to load environment variables from the .env file.
     * If there is an error loading the .env file or if the required environment variable is missing,
     * an exception is thrown.
     * 
     * @throws Exception if the .env file cannot be loaded or if the MONGO_URL environment variable is not set.
     */
    private function initDotEnv()
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__));
        $envFile = $dotenv->safeLoad();
        if ($envFile === false) {
            ErrorHandler::throwException('Error loading the .env file', 1);
        }
        if (isset($envFile)) {
            $this->mongo_url = $_ENV['MONGO_URL'];
        } else {
            ErrorHandler::throwException('MONGO_URL is not set in the enviroment file');
        }
    }


    public function getConnection():Client{
        return $this->connectToMongo();
    }
}
