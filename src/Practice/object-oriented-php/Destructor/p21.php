<?php
class X
{
    public function _construct()//this is constructor
    {
        echo "building an object";
    }
    public function _destruct()
    {
        echo "destroying the object";
    }
}
$obj = new X();//when create object both construct and destruct call automatically
?>