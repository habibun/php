<?php

namespace Php\Release\v81;

class Fsync
{
    public function test()
    {
        $fh = fopen('memory://test');
        fsync($fh);
    }
}

$result = new Fsync();
$result->test();
