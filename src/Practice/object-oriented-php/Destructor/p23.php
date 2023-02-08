<?php
class A
{
    public function printMsg()
    {
        echo ("I still exist");
    }
    public function _destruct()
    {
        echo 'destroying the object';
    }
}
$b=new A();
$d=$c=$b;
$b=null;
$c->printMsg();
$d->printMsg();
?>