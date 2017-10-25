<?php

namespace Lib;

use Lib\Interfaces\LoggerInterface;

class ConsoleLogger implements LoggerInterface
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

