<?php

namespace Php\Release\v82;

/**
 * PHP 8.2 adds a new built-in parameter Attribute named #[\SensitiveParameter] that PHP makes sure to redact the actual value in stack traces and error messages.
 */
function passwordHash(#[\SensitiveParameter] string $password)  {
    debug_print_backtrace();
}

passwordHash('hunter2');

