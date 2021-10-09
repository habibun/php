<?php

namespace Php\Migration\Php74To80;

$res = str_starts_with('Foo', 'F'); // true
$res = str_starts_with('', ''); // true

var_dump($res);
