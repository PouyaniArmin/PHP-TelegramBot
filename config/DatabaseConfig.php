<?php


namespace Config;

use Dotenv\Dotenv;
use Exception;
use MongoDB\Client;
use Utilities\Env;
use Utilities\ErrorHandler;

class DatabaseConfig
{

    private string $mongo_url;

    /**
     * DatabaseConfig constructor.
     *
     * Initializes the environment variables by loading them from the .env file.
     */
    public function __construct()
    {
        $this->initDotEnv();
    }


    /**
     * Connects to the MongoDB server using the URL from the environment variables.
     *
     * This method creates a new MongoDB client and verifies the connection by listing databases.
     *
     * @return Client The MongoDB client instance.
     */
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
        Env::load();
        $mongoUrl = Env::get('MONGO_URL');
        if (!$mongoUrl) {
            ErrorHandler::throwException('MONGO_URL is not set in the enviroment file');
        }
        $this->mongo_url = $mongoUrl;
    }

    /**
     * Gets a MongoDB client connection.
     *
     * This method provides access to the MongoDB client connection, which can be used for database operations.
     *
     * @return Client The MongoDB client instance.
     */
    public function getConnection(): Client
    {
        return $this->connectToMongo();
    }
}
