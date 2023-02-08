<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/21/16
 * Time: 11:44 PM
 */
include 'ParentClass.php';

class ChildClass extends ParentClass
{
    public function child()
    {
        echo "I am a child class";
    }

    public function parent()
    {
        echo "i am overriding parent";
    }
}

$childClass = new ChildClass();
$childClass->parent();