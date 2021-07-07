<?php

namespace hw5\decorator;

use hw5\decorator\entity\Notify;
use hw5\decorator\repository\EmailNotifyRepository;
use hw5\decorator\repository\SMSNotifyRepository;
use hw5\decorator\services\NotifyService;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^decorator/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$notify = new Notify('Hello!');


$notifies = new NotifyService(new EmailNotifyRepository($notify->getText()), $notifies);
$notifies->sendNotify();

$notifies = new NotifyService(new SMSNotifyRepository($notify->getText()), $notifies);
$notifies->sendNotify();
