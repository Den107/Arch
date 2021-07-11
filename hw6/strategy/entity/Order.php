<?php


namespace hw6\strategy\entity;


class Order
{
    private int $sum;
    private string $phone;
    private bool $isPaid;


    public function __construct(int $sum, string $phone)
    {
        $this->sum = $sum;
        $this->phone = $phone;
        $this->isPaid = false;
    }


    public function getSum(): int
    {
        return $this->sum;
    }


    public function getPhone(): string
    {
        return $this->phone;
    }


    public function isPaid(): bool
    {
        return $this->isPaid;
    }


    public function setIsPaid(bool $isPaid): void
    {
        $this->isPaid = $isPaid;
    }
}
