<?php
namespace Php\Migration\Php73To74;

/**
 * Concise syntax for anonymous functions
 */

class Test {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$test1 = new Test("test1");
$test2 = new Test("test2");
$tests = [$test1, $test2];

// Previously
$names = array_map(function ($test) {
    return $test->getName();
}, $tests);

// Now
$names = array_map(fn($test) => $test->getName(), $tests);

echo '<pre>' . var_export($names, true) . '</pre>';
