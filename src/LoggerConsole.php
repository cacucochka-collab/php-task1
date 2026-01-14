<?php

namespace App;

use App\AbstractLogger;

class LoggerConsole extends AbstractLogger
{
    public function logging($event, $message)
    {
        $timeSet = date("Y-m-d H:i:s");
        $logStr = "[time: $timeSet] [$event] - $message \n";
        print_r($logStr);
    }
}
