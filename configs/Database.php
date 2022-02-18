<?php

namespace Configs;

class Database
{
    private $dbname;
    private $host;
    private $username;
    private $password;
    
    public function __construct()
    {
        $this->dbname = "louischopot_";
        $this->host = "db.3wa.io";
        $this->username = 'louischopot';
        $this->password = '47caf7a0563a67b40eaeda64d6c2b7d8';
    }
    
    
    public function db_connect()
    {
        return new \PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8",$this->username,$this->password);
        
        
    }
}