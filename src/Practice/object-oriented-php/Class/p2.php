<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/5/14
 * Time: 8:59 PM
 */
include("p1.php");
class MyClass{
    public $pop = "I'm a class property!";//pop variables in the class
}
$obj = new MyClass();//the way to create object
echo $obj->pop;//Output the property(want to see the output of class)
?>
