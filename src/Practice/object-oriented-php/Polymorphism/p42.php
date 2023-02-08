<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/14/14
 * Time: 3:37 PM
 */
class A{//parent class
    function Dp(){//Dp method in the parent class
        echo "Inside the Base class<br/>";
    }
}
class B extends A{//B is child class
    function Dp()//Dp method in the class it is also in the parent class
    {
        echo "Inside the Child class<br/>";
    }
}
//This Dp method in both child and parent class this way is polymorphism
$obj = new B();
$obj->Dp();
?>