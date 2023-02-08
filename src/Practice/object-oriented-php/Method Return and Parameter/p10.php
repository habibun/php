<?php
class pen
{
    function PenType($price) //space is parameter its value come when call it
    {
        echo $price; //display the value of $price
    }
}
$obj = new pen();
$obj ->PenType(2); //passing value of $price, value is 2
?>