<?php

/**
 * What it is: PHP 8.4 removes a "lazy" way of writing code. Previously, if you gave a function parameter a default value of null, PHP automatically assumed that variable could be null. Now, you must be explicit.
 *
 * Old Version: If you wrote string $name = null, PHP silently changed it to ?string $name = null.
 *
 * PHP 8.4 (New): This "silent" change is deprecated. You must manually add the ? or use a union type (string|null) to show that null is allowed.
 */


// --- OLD WAY (Deprecated in 8.4) ---
// PHP "guessed" you meant it could be null because of the = null
function greet(string $middleName = null) {
    echo $middleName;
}

// --- PHP 8.4 WAY (The Correct Way) ---
// You must explicitly use the '?' to allow null
function greet(?string $middleName = null) {
    echo $middleName;
}

greet(null); // Works perfectly

