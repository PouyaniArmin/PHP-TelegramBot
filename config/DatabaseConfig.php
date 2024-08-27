<?php


namespace Config;

use Dotenv\Dotenv;
use Exception;
use MongoDB\Client;

class DatabaseConfig
{

    private string $mongo_url;
    private string $tb_name;
    protected Client $conn;
    public function __construct()
    {
        $this->initDotEnv();
        $this->conn = $this->connectToMongo();
    }



    private function connectToMongo()
    {
        try {
            $clinet = new Client($this->mongo_url);
            return $clinet;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    private function initDotEnv()
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__));
        $envFile = $dotenv->safeLoad();
        if ($envFile) {
            $this->mongo_url = $_ENV['MONGO_URL'];
            $this->tb_name = $_ENV['MONGO_TABLE'];
        } else {
            return throw new Exception("Error Processing ENV File", 1);
        }
    }
}
