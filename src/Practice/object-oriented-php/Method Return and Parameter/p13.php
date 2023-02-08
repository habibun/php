<?php
class pen
{
    function PenType()
    {
        return 5; //return value 5 //use return keyword to return value
    }
}
$obj = new pen();
echo $obj->PenType(); //Here we will get 5 because call PenType from here
?>