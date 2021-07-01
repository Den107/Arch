<?php

/**
 * Это хард-код и божественный класс вместе, данные о подключении к бд
 * можно вынести в отдельную функцию, да и разделить 
 * код на несколько более мелких функция
 */

function createProduct(
    string $title,
    string $description,
    float $price
) {
    static $connection = null;
    if (is_null($connection)) {
        $config =  [
            'host' => '127.0.0.1',
            'login' => 'mysql',
            'password' => 'mysql',
            'dbName' => 'learn_php_1'
        ];;
        $connection = mysqli_connect(
            $config['host'],
            $config['login'],
            $config['password'],
            $config['dbName']
        );
    }

    $sql = "INSERT INTO products (title, description, price)
            VALUES ('{$title}','{$description}','{$price}')";
    mysqli_query($connection, $sql);
    return mysqli_insert_id($connection);
}
