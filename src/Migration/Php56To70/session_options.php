<?php


namespace Php\Migration\Php56To70;

/**
 * session_start() now accepts an array of options that override the session configuration directives normally set in php.ini.
 */
session_start([
    'cache_limiter' => 'private',
    'read_and_close' => true,
]);

