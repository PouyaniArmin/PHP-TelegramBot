<?php 

namespace Database;

use Config\DatabaseConfig;
use MongoDB\Client;
use MongoDB\Collection;
use Utilities\ErrorHandler;

class MongoDB extends DatabaseConfig{
    protected Client $clinet;
    protected Collection $collection;
    public function __construct(string $db_name,string $collection)
    {
        parent::__construct();
        $this->clinet=$this->getConnection();
        $this->collection=$this->clinet->selectCollection($db_name,$collection);
    }

}