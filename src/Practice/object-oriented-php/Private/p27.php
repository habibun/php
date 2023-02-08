<?php
class test
{
    private $abc='you can access me(abc)inside of test class';
    public function xyz()
    {
        echo $this->abc;
    }
}
$objA=new test();
//echo $objA->abc;//accessible not possible from outside the test class
$objA->xyz();//public method of the class test
?>