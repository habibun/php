<?php
class human{//this is starting bracket 1 for this class

    function _construct($name,$age)//name and age two parameter value come from when create object
    {
        echo $name;
        echo $age;
    }
}//this is ending bracket 2 for this class human
$akash = new human("Jebin",21);//call constructor automatically pass value jebin
//passing two value jebin and 21 during object creation
?>