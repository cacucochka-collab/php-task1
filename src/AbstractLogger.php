<?php

namespace App;

use App\LoggerInterface;

abstract class AbstractLogger implements LoggerInterface
{
    abstract function logging($event, $message);

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
