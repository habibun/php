<?php

namespace Php\Release\v81;

class ReturnTypeWillChange
{
//    public function offsetGet(mixed $offset) {}
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset): string {}
}
