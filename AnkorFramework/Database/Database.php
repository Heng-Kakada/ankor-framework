<?php

namespace AnkorFramework\Database;

use PDO;

class Database
{
    public $connection;
    public $statement;

    public function __construct()
    {
        $config = require pk_base_path("/AnkorFramework/config/DatabaseConfig.php");
        $dsn = 'mysql:' . http_build_query($config['MySQL'], "", ";");

        $this->connection = new PDO($dsn, "root", "", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function connect()
    {
        echo "Connected to MySQL";
    }

    public function query($query, $param = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($param);
        return $this;
    }
    public function get()
    {
        return $this->statement->fetchAll();
    }
    public function find()
    {
        return $this->statement->fetch();
    }
    public function findAndFail()
    {
        $result = $this->find();
        if (!$result) {
            return;
        }
        return $result;
    }
}