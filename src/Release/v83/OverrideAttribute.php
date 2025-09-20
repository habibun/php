<?php

namespace Php\Release\v83;

// PHP < 8.3
use PHPUnit\Framework\TestCase;

final class MyTest extends TestCase {
    protected $logFile;

    protected function setUp(): void {
        $this->logFile = fopen('/tmp/logfile', 'w');
    }

    protected function taerDown(): void {
        fclose($this->logFile);
        unlink('/tmp/logfile');
    }
}

// The log file will never be removed, because the
// method name was mistyped (taerDown vs tearDown).


// PHP >= 8.3
use PHPUnit\Framework\TestCase;

final class MyTest extends TestCase {
    protected $logFile;

    protected function setUp(): void {
        $this->logFile = fopen('/tmp/logfile', 'w');
    }

    #[\Override]
    protected function taerDown(): void {
        fclose($this->logFile);
        unlink('/tmp/logfile');
    }
}

// Fatal error: MyTest::taerDown() has #[\Override] attribute,
// but no matching parent method exists


