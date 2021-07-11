<?php


namespace hw6\strategy\paySystem;

use hw6\strategy\entity\Order;
use hw6\strategy\interfaces\PayInterface;

class Yandex implements PayInterface
{
    public function proceedPayment(Order $order)
    {
        echo "Заказ на сумму {$order->getSum()} оплачен с помощью Yandex.";
    }
}
