<?php

namespace Php\Migration\Php82;

function passwordHash(#[\SensitiveParameter] string $password)  {
    debug_print_backtrace();
}

passwordHash('hunter2');

