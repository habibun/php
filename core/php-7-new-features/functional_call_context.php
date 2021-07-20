<?php

$context = function ()
{
    var_dump($this);
};

class Obj{ public $a = "this is a test";}

$context->call(new Obj);
