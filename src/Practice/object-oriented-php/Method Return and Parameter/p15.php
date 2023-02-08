<?php
class pen
{
    function PenType()
    {
        return "Econo"; //return string type value like Econo
    }
}
$obj = new pen();
echo $obj->PenType();
?>