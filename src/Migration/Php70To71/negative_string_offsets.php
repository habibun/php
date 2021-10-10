<?php

namespace Php\Migration\Php70To71;

// Support for negative string offsets
var_dump('abcdef'[-2]);
var_dump(strpos('aabbcc', 'b', -3));

