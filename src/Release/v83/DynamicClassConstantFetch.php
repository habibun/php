<?php

namespace Php\Release\v83;


// PHP < 8.3
class Foo {
    const PHP = 'PHP 8.2';
}

$searchableConstant = 'PHP';

var_dump(constant(Foo::class . "::{$searchableConstant}"));


// PHP >= 8.3
class Foo {
    const PHP = 'PHP 8.3';
}

$searchableConstant = 'PHP';

var_dump(Foo::{$searchableConstant});

