<?php


namespace hw5\decorator\interfaces;


interface NotifyRepositoryInterface
{
    public function sendNotify($notify);
    public function getNotify(): string;
}
