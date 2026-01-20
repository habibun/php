<?php
/**
 * Short Description (High‑Level)
 *
 * Old (pre‑8.4): BCMath used only procedural functions like bcadd(), bcsub(), bcdiv(), and bccomp() which work with strings representing numbers.
 *
 * New (PHP 8.4+): A BCMath\Number object lets you handle big numbers as objects, use +, -, *, /, and even comparison operators like > directly. The objects are immutable and implement Stringable, so you can echo them.
 */


use BCMath\Number;

// ======================================
// OLD WAY (pre-PHP 8.4)
// ======================================
$num1 = '1.23';
$num2 = '2.77';

// Add with bcadd
$result_old = bcadd($num1, $num2, 2); // string result
echo "Old result: $result_old\n";     // Old result: 4.00

// Compare with bccomp
$is_greater_old = bccomp($num1, $num2) > 0; // false
echo "Old comparison: " . ($is_greater_old ? "true" : "false") . "\n"; // Old comparison: false

// ======================================
// NEW WAY (PHP 8.4+)
// ======================================
$num1_new = new Number('1.23');
$num2_new = new Number('2.77');

// Add using + operator
$result_new = $num1_new + $num2_new;   // Number object, prints as string
echo "New result: $result_new\n";      // New result: 4.00

// Compare using >
$is_greater_new = $num1_new > $num2_new;
echo "New comparison: " . ($is_greater_new ? "true" : "false") . "\n"; // New comparison: false


