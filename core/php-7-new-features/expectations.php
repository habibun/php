<?php
ini_set('display_errors', 1);

$num = 10;
var_dump(assert($num > 1, "it should be numeric"));
