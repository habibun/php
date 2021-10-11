<?php

declare(strict_types=1);

namespace Php\Migration\Php56To70;

ini_set('display_errors', 'On');

////Coercive Mode
//function sum(int ...$ints) {
//    return array_sum($ints);
//}
//print(sum(2, '3', 4.1));

// Strict mode
function sum(int ...$ints)
{
    return array_sum($ints);
}
echo sum(2, '3', 4.1);
