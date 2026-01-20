<?php

/**
 * What it is: A tool to find the first element in an array that satisfies a specific condition.
 *
 * Old Version: You had to write a foreach loop, check the condition with an if statement, and then break the loop manually.
 *
 * PHP 8.4 (New): You use one function that returns the value immediately when a match is found.
 */

$fruits = ['Banana', 'Apple', 'Cherry', 'Apple'];

// --- OLD WAY ---
$found = null;
foreach ($fruits as $fruit) {
    if ($fruit === 'Apple') {
        $found = $fruit;
        break; // Stop looking after the first match
    }
}

// --- PHP 8.4 WAY ---
$found = array_find($fruits, fn($f) => $f === 'Apple');

echo $found; // Output: Apple

