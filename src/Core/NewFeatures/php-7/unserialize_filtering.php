<?php

class newObj {
    public $prop = "hello world";
    private $priv = "this is private to the object";
    private $arr = [20, 200, 500, 600];
}

$data = serialize(new newObj());
//echo $data;

$unserialized = unserialize($data, ["allowed_classes" => ["newObj"]]);
echo $unserialized->prop;