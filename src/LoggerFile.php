<?php

namespace App;

use App\AbstractLogger;

class LoggerFile extends AbstractLogger
{

    private $logFile;

    public function __construct($logFile = "log.txt")
    {
        $this->logFile = $logFile;
        $this->saveTxt();
    }

    public function logging($event, $message)
    {
        $timeSet = date("Y-m-d H:i:s");
        $logStr = "[time: $timeSet] [$event] - $message \n";
        file_put_contents($this->logFile, $logStr, FILE_APPEND);
    }

    public function saveTxt()
    {
        if (!file_exists($this->logFile)) {
            file_put_contents($this->logFile, "");
        }
    }
}