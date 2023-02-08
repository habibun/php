<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/14/14
 * Time: 11:21 PM
 */
abstract class A{
    abstract function disp();
}
class B extends A{
    public function disp()
    {
        echo "inside the child class<br/>";
    }
}
class C extends A{
    public function disp()
    {
        echo "Inside the child class 2 <br />";
    }
}
$two =new B();
echo "<b>Calling from the child class B:<br/>";
$two->disp();
echo "<b>Calling from the child class C:<br/>";

$three=new C();
$three->disp();
?>