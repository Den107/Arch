<?php

namespace hw4\AbstractFactory;


use hw4\db\PostgreSQL;
use hw4\interfaces\DbFactoryInterface;

class PostgreSQLFactory implements DbFactoryInterface
{
    private PostgreSQL $connection;


    public function __construct(PostgreSQL $connection)
    {
        $this->connection = $connection;
    }

    public function DBConnection(): PostgreSQL
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
