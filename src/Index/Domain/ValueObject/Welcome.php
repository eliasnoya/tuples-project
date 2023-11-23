<?php

namespace Src\Domain\ValueObject;


class Welcome
{
    public function __construct(protected string $welcome)
    {
    }

    public function value()
    {
        return $this->welcome;
    }
}
