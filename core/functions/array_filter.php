<?php
/**
 * Filters elements of an array using a callback function
 */

function arrayFilter($a) {
    return $a > 2;
}

$res = array_filter([2, 4, 5], "arrayFilter");
echo '<pre>' . var_export($res, true) . '</pre>';
