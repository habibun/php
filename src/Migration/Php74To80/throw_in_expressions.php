<?php

namespace Php\Migration\Php74To80;

$value = isset($_GET['value'])
    ? $_GET['value']
    : throw new \InvalidArgumentException('value not set');

var_dump($value);
