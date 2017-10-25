<?php

namespace Lib;

class LoggerFactory
{
    const CONSOLE_TYPE = "console";
    const FILE_TYPE = "file";
    
    static $types = [
        self::CONSOLE_TYPE => ConsoleLogger::class,
        self::FILE_TYPE => FileLogger::class
    ];
    
    public static function getLogger($type = self::CONSOLE_TYPE)
    {
        return new self::$types[$type]();
    }
}
