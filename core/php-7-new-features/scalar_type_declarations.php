<?php

// Strict mode
declare(strict_types=1);
function sum(int ...$ints) {
    return array_sum($ints);
}
print(sum(2, '3', 4.1));


// Coercive mode
function sumOfInts(int ...$ints)
{
    return array_sum($ints);
}

var_dump(sumOfInts(2, 4, 6));