<?php

namespace Php\Release\v81;

class ArrayIsList
{
    public function test()
    {
        // Key does not start with 0
        $a = array_is_list([1 => 'apple', 'orange']); // false
        var_dump($a);

        // Keys are not in order
        $b = array_is_list([1 => 'apple', 0 => 'orange']); // false
        var_dump($b);

        // Non-integer keys
        $c = array_is_list([0 => 'apple', 'foo' => 'bar']); // false
        var_dump($c);

        // Non-sequential keys
        $d = array_is_list([0 => 'apple', 2 => 'bar']); // false
        var_dump($d);

        // Non-sequential keys
        $e = array_is_list([0, 1 , 3]); // false
        var_dump($e);
    }
}

$result = new ReadonlyClasses();
$result->test();
