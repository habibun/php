<?php
class university //class name university
{
    function course()
    {
        echo "Software Engineering"; //method statement //Execute only if this method outside of this class
    }//end method
}
$obj = new university(); //after class you can use first bracket or not use
echo $obj->course(); //call method, method will not execute if you don't call //method
?>