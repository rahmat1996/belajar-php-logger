<?php

namespace Tamhar\BelajarPhpLogger\App;

class View
{
    public static function render(string $view, $model)
    {
        require_once __DIR__ . "/../View/" . $view . ".php";
    }
}
