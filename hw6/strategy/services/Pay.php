<?php

namespace hw6\strategy\services;

use hw6\strategy\entity\Order;
use hw6\strategy\interfaces\PayInterface;

class Pay
{
    private bool $isSuccess;

    /**
     * Payment constructor.
     */
    public function __construct()
    {
        $this->isSuccess = false;
    }


    public function proceedPayment(PayInterface $paySystem, Order $order)
    {
        if (!$order->isPaid() && !$this->isSuccess) {
            $paySystem->proceedPayment($order);
            $order->setIsPaid(true);
            $this->isSuccess = true;
        } else echo 'Заказ уже оплачен!';
    }
}
