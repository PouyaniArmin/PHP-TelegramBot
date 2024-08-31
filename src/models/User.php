<?php


namespace Models;

use Database\MongoDB;

class User extends MongoDB
{
    public function __construct()
    {
        parent::__construct('TelBot', 'users');
    }  
}
