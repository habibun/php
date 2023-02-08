<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/14/14
 * Time: 11:54 AM
 */
class Foo
{
    public $Bar;
    public function _construct()
    {
        $this->Bar=0;//use this to access Bar variables
    }
    public function Baz()
    {
        $this->Bar=10;
        echo $this->Bar;
    }
}
$f1=new Foo();
$f2=new Foo();
$fool->Baz();//sets the value of $Bar inside $fool 1 to 10
//does not affect the $Bar inside $foo2
?>