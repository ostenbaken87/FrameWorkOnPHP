<?php

namespace App\Application\Database;

use App\Application\Config\Config;

class Connection implements ConnectionInterface
{
    private string $driver;
    private string $host;
    private string $dbname;
    private string $username;
    private string $password;
    private int $port;

    public function __construct()
    {
        $this->driver = Config::get('database.driver');
        $this->host = Config::get('database.host');
        $this->dbname = Config::get('database.dbname');
        $this->username = Config::get('database.username');
        $this->password = Config::get('database.password');
        $this->port = Config::get('database.port');
    }

    public function connect(): \PDO
    {
        return new \PDO("$this->driver:host=$this->host;port=$this->port;dbname=$this->dbname",
            $this->username,
            $this->password);
    }
}