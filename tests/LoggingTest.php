<?php

namespace Tamhar\BelajarPhpLogger;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class LoggingTest extends TestCase
{
    public function testLogging()
    {
        $logger = new Logger(LoggingTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../application.log"));

        $logger->info("Belajar PHP Logging");
        $logger->info("Rahmat Belajar PHP Logging");
        $logger->info("Belajar PHP Logging Menggunakan Monolog");

        self::assertNotNull($logger);
    }
}
