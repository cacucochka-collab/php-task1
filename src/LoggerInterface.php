<?php

namespace App;
interface LoggerInterface
{
    function logging($event,$message);
    public function info($message);
    public function warning($message);
    public function error($message);
}
