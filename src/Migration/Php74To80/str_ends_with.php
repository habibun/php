<?php

namespace Php\Migration\Php74To80;

$res = str_ends_with('Foo', ''); // true
$res = str_ends_with('', ''); // true

var_dump($res);
