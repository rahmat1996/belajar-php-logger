<?php

namespace Tamhar\BelajarPhpLogger;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class ContextTest extends TestCase
{
    public function testContext()
    {
        $logger = new Logger(ContextTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->info("This is log message", ['username' => 'rahmat']);
        $logger->info("Try login user", ['username' => 'rahmat']);
        $logger->info("Success login user", ['username' => 'rahmat']);
        $logger->info("Log other", ['test','coba']);
        $logger->info("Without context");

        self::assertNotNull($logger);
    }
}
