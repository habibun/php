<?php
class university
{
    function Room()//method name room
    { //start method
        echo "This is class room";//method statement //Execute only if call this method of this class
    } //end method
}

$obj = new university(); //after class you can use first bracket or not use
echo $obj->Room(); //call method,method will not execute if you dont call //method
?>