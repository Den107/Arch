<?php

namespace hw4\AbstractFactory;


use hw4\db\MySQL;
use hw4\interfaces\DbFactoryInterface;

class MySQLFactory implements DbFactoryInterface
{
    private MySQL $connection;


    public function __construct(MySQL $connection)
    {
        $this->connection = $connection;
    }

    public function DBConnection(): MySQL
    {
        return $this->connection;
    }

    public function DBRecord(): bool
    {
        return true;
    }

    public function DBQueryBuilder(): bool
    {
        return true;
    }
}
