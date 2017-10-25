<?php

namespace Lib\Interfaces;

abstract class AbstractFileLogger implements LoggerInterface
{
    public function openFile()
    {
        echo 'OpenFile' . PHP_EOL;
    }
}
