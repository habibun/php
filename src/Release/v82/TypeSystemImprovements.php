<?php

namespace Php\Release\v82;


/**
 * PHP 8.2 supports Disjoint Normal Form (DNF) types — It is now possible to combine Union Types (PHP 8.0) and Intersection Types (PHP 8.1), making it possible to declare precise and expressive parameter, return, and property types.
 */

function process((HTMLRequest & RequestInterface) | APIRequest $request) {
    // ...
}

/**
 * Support for true and false as stand-alone types makes it possible to replace bool type declarations if the boolean value is always the same.
 */

function alwaysReturnsFalse(): false {}

function alwaysReturnsNull(): null {}

function alwaysReturnsTrue(): true {}


