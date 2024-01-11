<?php

namespace Tamhar\BelajarPhpLogger\Middleware;

use Tamhar\BelajarPhpLogger\Middleware\Middleware;

class AuthMiddleware implements Middleware
{
    public function before(): void
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
    }
}
