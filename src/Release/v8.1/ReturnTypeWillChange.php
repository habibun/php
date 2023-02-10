<?php

namespace Php\Migration\Php80To81;

class ReturnTypeWillChange
{
//    public function offsetGet(mixed $offset) {}
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset): string {}
}
