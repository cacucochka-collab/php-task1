<?php

use App\LoggerConsole;
use App\LoggerFile;

require_once 'vendor/autoload.php';

$arr = [1,2,3,4,5];

$loggerFile = new LoggerFile();
$loggerConsole = new LoggerConsole();

foreach ($arr as $item)
{
    foreach ([$loggerFile, $loggerConsole] as $logger) //по очереди
    {
        $logger->logging('info', $item);
        $logger->logging('error', $item);
    }
}