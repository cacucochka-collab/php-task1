<?php

namespace App;

use App\InterfaceLogger;

class LoggerConsole implements InterfaceLogger
{
    public function logging($event, $message)
    {
        $timeSet = date("Y-m-d H:i:s");
        $logStr = "[time: $timeSet] [$event] - $message \n";
        print_r($logStr);
    }

    public function info($message)
    {
        $this->logging("info", $message);
    }

    public function warning($message)
    {
        $this->logging("warning", $message);
    }

    public function error($message)
    {
        $this->logging("error", $message);
    }
}
