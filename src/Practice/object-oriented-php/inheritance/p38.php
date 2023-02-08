<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/14/14
 * Time: 12:17 PM
 */
class class_A
{
    public function hello()//hello function.txt in the super class
    {
        return "Hello I am parent";//hello method return Hello I am parent
    }
}

class my_class extends class_A
{
    public function greeting()
    {
        echo $this->hello();//call hello method of class A and hello method return
        //'Hello i am parent'
    }
}
$obj = new my_class();//object of base class my_class
$obj->greeting();//call greeting method of base class
?>