<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/14/14
 * Time: 3:46 PM
 */
class A{//parent class
    function Dp(){//dp method in parent class
        echo "Inside the base class";
    }
}
class B extends A  //B is child class
{
    function Dp()//dp method in child class it is also in the parent class
    {
        echo "Inside the child class<br/>";
    }
}
//this dp method in both child and parent class this way is polymorphism

class C extends A
{
    function Dp()
    {
        echo "I am in class C";
    }
}
$obj=new B();
$obj->Dp();

$oc=new C();
$oc->Dp();
?>