<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/24/16
 * Time: 11:17 PM
 */
class ClassAndMethodExistence
{
    public function test()
    {
        echo "This is a test method.";
    }
}

$came = new ClassAndMethodExistence();

if(class_exists('ClassAndMethodExistence')){
    echo "Class exist";
}

if (method_exists($came, 'test')) {
    echo "Method exist";
}