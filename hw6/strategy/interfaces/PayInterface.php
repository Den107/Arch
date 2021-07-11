<?php


namespace hw6\strategy\interfaces;

use hw6\strategy\entity\Order;

interface PayInterface
{
    public function proceedPayment(Order $order);
}
