<?php

namespace hw4\AbstractFactory;


use hw4\db\Oracle;
use hw4\interfaces\DbFactoryInterface;

class OracleFactory implements DbFactoryInterface
{
    private Oracle $connection;


    public function __construct(Oracle $connection)
    {
        $this->connection = $connection;
    }

    public function DBConnection(): Oracle
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
