<?php

namespace Php\Migration\Php70To71;

/**
 * Void functions.
 *
 * A void return type has been introduced. Functions declared with void as their return type must either omit their return statement altogether, or use an empty return statement.
 * null is not a valid return value for a void function.
 *
 * @param mixed $left
 * @param mixed $right
 */
function swap(&$left, &$right): void
{
    if ($left === $right) {
        return;
    }

    $tmp = $left;
    $left = $right;
    $right = $tmp;
}

$a = 1;
$b = 2;
var_dump(swap($a, $b), $a, $b);
