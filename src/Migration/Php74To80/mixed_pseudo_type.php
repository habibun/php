<?php

namespace Php\Migration\Php74To80;

class Example {
    public mixed $exampleProperty;
    public function foo(mixed $foo): mixed
    {
        return $foo;
    }
}

$a = new Example();
var_dump($a->foo('test'));
var_dump($a->foo(10));

