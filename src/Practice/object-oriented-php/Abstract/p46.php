<?php
abstract class Foo{//Foo is abstract class
    abstract public function foobar();//foobar is abstract method no body of this method
}
class Baz extends Foo{
    public function foobar()//implement in the foobar method in the Baz class
    {
        echo "My name is jony";//only child class can implement the abstract method
    }
}
//we can create the object of Foo class like $ob=new Foo(), not possible because abstract class
$h=new Baz();
$h->foobar();
?>