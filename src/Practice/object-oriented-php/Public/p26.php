<?php
class test
{
    public $abc='you can access me(abc) outside of test class';
    public $xyz;
    public function xyz()
    {
        echo 'you can access me (xyz) outside of test class';
    }
}
$objA=new test();
echo $objA->abc;//accessible from outside
echo $objA->xyz();//public method of the class test
?>