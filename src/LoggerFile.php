<?php

namespace App;

use App\InterfaceLogger;

class LoggerFile implements InterfaceLogger
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

    public function saveTxt()
    {
        if (!file_exists($this->logFile)) {
            file_put_contents($this->logFile, "");
        }
    }
}