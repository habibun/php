<?php

namespace Php\Migration\Php70To71;

/**
 * Nullable types.
 *
 * Type declarations for parameters and return values can now be marked as nullable by prefixing the type name with a question mark.
 * This signifies that as well as the specified type, null can be passed as an argument, or returned as a value, respectively.
 */
function testReturn(): ?string
{
    return null;
}

$res = testReturn();

var_export($res);
