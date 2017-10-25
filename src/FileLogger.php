<?php

namespace Lib;

use Lib\Interfaces\AbstractFileLogger;

class FileLogger extends AbstractFileLogger
{
    public function log(string $message)
    {
        echo 'log' . PHP_EOL;
    }

    public function warn(string $message)
    {
        echo 'warn' . PHP_EOL;
    }

    public function error(string $message)
    {
        echo 'error' . PHP_EOL;
    }
}
