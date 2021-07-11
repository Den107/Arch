<?php

namespace hw6\strategy;

use hw6\strategy\entity\Order;
use hw6\strategy\paySystem\Qiwi;
use hw6\strategy\paySystem\WebMoney;
use hw6\strategy\paySystem\Yandex;
use hw6\strategy\services\Pay;


spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Strategy/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$order = new Order(233, '79991231213');
$order1 = new Order(1234, '79991231213');


$payment = new Pay();
$payment1 = new Pay();

$payment->proceedPayment(new Qiwi(), $order);

$payment->proceedPayment(new Qiwi(), $order);

$payment->proceedPayment(new Yandex(), $order);

$payment->proceedPayment(new WebMoney(), $order1);

$payment1->proceedPayment(new Yandex(), $order1);
