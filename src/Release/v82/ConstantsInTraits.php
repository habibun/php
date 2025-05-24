<?php

namespace Php\Release\v82;

/**
 * In PHP 8.2, it is now possible to declare constants in traits. The traits cannot be accessed directly, but these constants become class constants when a class uses the trait.
 */

trait FooBar {
    const FOO = 'foo';
    private const BAR = 'bar';
    final const BAZ = 'baz';
    final protected const QUX = 'qux';
}

class Test {
    use FooBar;
}

echo Test::BAZ; // 'bar'
