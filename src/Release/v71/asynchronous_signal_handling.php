<?php

namespace Php\Migration\Php70To71;

/**
 * Asynchronous signal handling
 */
pcntl_async_signals(true); // turn on async signals

pcntl_signal(SIGHUP,  function($sig) {
    echo "SIGHUP\n";
});

posix_kill(posix_getpid(), SIGHUP);
