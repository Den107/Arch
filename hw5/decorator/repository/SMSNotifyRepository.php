<?php


namespace hw5\decorator\repository;

use hw5\decorator\interfaces\NotifyRepositoryInterface;

class SMSNotifyRepository implements NotifyRepositoryInterface
{
    private string $notify;

    public function __construct($notify)
    {
        $this->notify = $notify;
    }

    function sendNotify($notify): string
    {
        return 'Сообщение' . ' ' . $this->notify . ' ' . 'было отправлено с помощью SMS.';
    }

    public function getNotify(): string
    {
        return $this->notify;
    }
}
