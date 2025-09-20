<?php

namespace Php\Release\v83;

// PHP < 8.3
function json_validate(string $string): bool {
    json_decode($string);

    return json_last_error() === JSON_ERROR_NONE;
}

var_dump(json_validate('{ "test": { "foo": "bar" } }')); // true


// PHP >= 8.3
var_dump(json_validate('{ "test": { "foo": "bar" } }')); // true
