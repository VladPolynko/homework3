<?php

namespace Lib\Interfaces;

interface LoggerInterface
{
    /**
     * @param string $message
     * @return mixed
     */
    public function log(string $message);

    /**
     * @param string $message
     * @return mixed
     */
    public function warn(string $message);

    /**
     * @param string $message
     * @return mixed
     */
    public function error(string $message);
}
