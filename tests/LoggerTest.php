<?php

namespace Tamhar\BelajarPhpLogger;

use PHPUnit\Framework\TestCase;

use Monolog\Logger;

class LoggerTest extends TestCase
{
    public function testLogger()
    {
        $logger = new Logger("BelajarPHPLogger");
        self::assertNotNull($logger);
    }

    public function testLoggerWithName(){
        $logger = new Logger(LoggerTest::class);
        self::assertNotNull($logger);
    }
}
