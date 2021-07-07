<?php

namespace hw5\adapter;

use hw5\adapter\main\CircleAdapter;
use hw5\adapter\main\SquareAdapter;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^adapter/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$square = new SquareAdapter();
$circle = new CircleAdapter();
