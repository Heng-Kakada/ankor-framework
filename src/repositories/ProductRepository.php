<?php
namespace src\repositories;

use AnkorFramework\Database\Database;

class ProductRepository
{
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

}