<?php

namespace Andrea\Marketplace\Services;

use PDO;

class DatabaseService
{
    private PDO $_connection;

    public function __construct()
    {
        $this->_connection = new PDO('mysql:host=127.0.0.1:3306;dbname=marketplace', 'homestead', 'secret');
    }

    public function query(string $sql)
    {
        return $this->_connection->query($sql);
    }
}