<?php
class pen
{
    function PenType($price,$penName,$companyName) //if more than one parameter write using comma
    {
        echo $price; //display the value of $price
        echo $penName;
        echo $companyName;
    }
}
$obj = new pen();
$obj->PenType(13," Econo"," Ocan"); //if want to pass more parameter value write using comma
?>