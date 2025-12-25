<?php

namespace App;
interface InterfaceLogger
{
    public function logging($event,$message);
    public function info($message);
    public function warning($message);
    public function error($message);
}
