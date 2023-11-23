<?php

namespace Src\Index\Application;

use Src\Domain\Index;
use Src\Domain\ValueObject\Welcome;

class IndexService
{
    public function execute(string $message): Index
    {
        return new Index(new Welcome($message));
    }
}
