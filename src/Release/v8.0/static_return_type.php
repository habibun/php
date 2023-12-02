<?php

namespace Php\Migration\Php74To80;

class Foo {
    public static function getInstance(): static {
        return new static();
    }
}

$res = new Foo();
var_dump($res);
