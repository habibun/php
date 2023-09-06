<?php

namespace Php\Release\v81;

class Fdatasync
{
    public function test()
    {
        $file = 'test.txt';

        $fh = fopen($file, 'w');
        fwrite($fh, 'test data');
        fwrite($fh, "\r\n");
        fwrite($fh, 'additional data');

        fsync($fh);
        fclose($fh);
    }
}

$result = new Fdatasync();
$result->test();
