<?php
class pen
{
    function PenType($price,$penName) //if more than one parameter write using comma
    {
        echo $price; //display the value of $price
        echo $penName;
    }
}
$obj = new Pen();
$obj->PenType(13," Econo"); //if want to pass more parameter value write using comma
?>