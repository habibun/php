<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/14/14
 * Time: 12:48 PM
 */
class kok
{
    var $_name;
    function Pet($name)
    {
        $this->_name=$name;
    }
    function eat()
    {
    }
    function sleep()
    {
        echo 'I am sleeping';
    }
}
class Dog extends kok
{
    function bark()
    {
    }
}
class Cat extends kok
{
    function meow()
    {
    }
}
$dog=new Dog("Max");
$dog->eat();
$dog->bark();
$dog->sleep();

$cat = new Cat('Misty');
$cat->eat();
$cat->meow();
$cat->sleep();
?>