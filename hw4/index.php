<?php

namespace hw4;

use hw4\db\Oracle;
use hw4\db\PostgreSQL;
use hw4\db\MySQL;
use hw4\AbstractFactory\MySQLFactory;
use hw4\AbstractFactory\OracleFactory;
use hw4\AbstractFactory\PostgreSQLFactory;


spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^AbstractFactory/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});
$mysql = new MySQL();
$oracle = new Oracle();
$postgresql = new PostgreSQL();
$db = new MySQLFactory($mysql);
$db1 = new OracleFactory($oracle);
$db2 = new PostgreSQLFactory($postgresql);
