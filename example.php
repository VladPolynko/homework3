<?php
require_once __DIR__ . "/vendor/autoload.php";

$logger = \Lib\LoggerFactory::getLogger();

$logger->warn("test");
