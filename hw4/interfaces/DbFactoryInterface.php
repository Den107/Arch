<?php


namespace hw4\interfaces;


interface DbFactoryInterface
{
    public function DBConnection();

    public function DBRecord();

    public function DBQueryBuilder();
}
