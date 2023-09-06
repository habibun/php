<?php

namespace Php\Release\v81;

class ArrayUnpackingStringKeyedArrays
{
    public function test()
    {
        $arrayA = ['a' => 1];
        $arrayB = ['b' => 2];

        $result = ['a' => 0, ...$arrayA, ...$arrayB];

        var_dump($result);
    }
}

$result = new ArrayUnpackingStringKeyedArrays();
$result->test();

