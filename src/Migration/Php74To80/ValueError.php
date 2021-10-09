<?php


namespace Php\Migration\Php74To80;

ini_set('display_errors',"On");

$a = strpos("s", "small", 16);
// Warning: strpos(): Offset not contained in string in ... on line ...
var_dump($a);

