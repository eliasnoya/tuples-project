<?php

namespace Src\Domain;

use Src\Domain\ValueObject\Welcome;

class Index
{
    public function __construct(public Welcome $welcomeMessage)
    {
    }
}
