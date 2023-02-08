<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/14/14
 * Time: 12:29 PM
 */
class class_A{
    public function hello($name)//hello function.txt in the super class
    {
        return $name; //hello method return isita
    }
}
class my_class extends class_A
{
    public function greeting($name)
    {
        echo $this->hello($name);//call hello method of class_A
    }
}
$obj =new my_class;//object of base class my_class
echo $obj->greeting('Isita');//call greeting method of base class
?>