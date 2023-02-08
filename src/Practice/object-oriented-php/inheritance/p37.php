<?php
class P
{
    public $n=12;//n declare in p class and assign value 12
}
class C extends P
{
    function display()
    {
        echo $this->n;//print n in the c class but c is variables in p class
        //since c is the child of p for that reason n is printed in the display method
    }
}

$io =new C();
$io->display();