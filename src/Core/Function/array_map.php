<?php
/**
 * Help
 *
 * The array_map() function sends each value of an array to a user-made function,
 * and returns an array with new values, given by the user-made function.
 */

$total = 0;
function sum($a)
{
    return $a + $a;
}
$res = array_map('sum', [10, 20]);
var_dump($res);
