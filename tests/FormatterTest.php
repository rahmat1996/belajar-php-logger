<?php

namespace Tamhar\BelajarPhpLogger;

use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class FormatterTest extends TestCase
{
    public function testFormatter()
    {
        $logger = new Logger(FormatterTest::class);
        $handler = new StreamHandler("php://stderr");
        $handler->setFormatter(new JsonFormatter());
        $logger->pushHandler($handler);

        $logger->info("Test Info");

        self::assertNotNull($logger);
    }
}
