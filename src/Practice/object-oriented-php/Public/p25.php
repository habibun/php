<?php
class test
{
    public function xyz()//xyz method defined by public,xyz accessible from outside class
    {
        echo 'I am defined public method';
    }
}
$obj = new test();
$obj->xyz();//public method of the class test
?>