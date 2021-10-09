<?php

namespace Php\Migration\Php74To80;

$map = new \splObjectStorage();

$object = new \stdClass();
$map[$object] = 'Foo';

var_dump(count($map)); // int(1)

unset($object);

var_dump(count($map)); // int(1)

//the references are weak, and the reference inside the WeakMap does not prevent
// the garbage collector from clearing the object if there are no other references to the object.
$map = new \WeakMap();

$object = new \stdClass();
$map[$object] = 'Foo';

var_dump(count($map)); // int(1)

unset($object);

var_dump(count($map)); // int(1)
