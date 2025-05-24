<?php

namespace Php\Migration\Php82;

trait Foo
{
    public const CONSTANT = 1;

    public function bar(): int
    {
        return self::CONSTANT;
    }
}
