<?php

namespace Php\Migration\Php70To71;

/**
 * Multi catch exception handling.
 *
 * Multiple exceptions per catch block may now be specified using the pipe character (|).
 * This is useful for when different exceptions from different class hierarchies are handled the same.
 */

try {
    // some code
} catch (FirstException|SecondException $e) {
    // handle first and second exceptions
}
