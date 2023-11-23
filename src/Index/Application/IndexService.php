<?php

namespace Src\Index\Application;

/**
 * Example Use Case:
 * Register this dependency in /dependencies/core.php (or another file set in the App)
 * to inject it into controllers or any infrastructure layer objects.
 */
class IndexService
{
    public function execute(string $message): string
    {
        return "Welcome to TuplesFramework, $message";
    }
}
