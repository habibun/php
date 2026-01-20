<?php
/**
 * Short Description
 *
 * Old: exit/die were language constructs → loose type handling, couldn’t use as callable.
 *
 * New (PHP 8.4): Proper functions → strict type checks, logical boolean/int handling, callable support, still callable without parentheses.
 */


// ======================================
// OLD (pre‑PHP 8.4)
// ======================================
exit("Hello World");   // prints message and stops
exit(true);            // prints "1" (bool → string!)
exit([]);              // prints "Array" (weird!) with warning

// ======================================
// NEW (PHP 8.4+)
// ======================================
exit("Hello World");   // same: prints message and stops
exit(true);            // exit code 1 (bool → int)
exit(null);            // treated as exit(0)
exit([]);              // TypeError: invalid type

// callable support
$fn = 'exit';
$fn(0);                // works, stops script
