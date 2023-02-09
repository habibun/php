<?php

namespace Php\Migration\Php80To81;

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
