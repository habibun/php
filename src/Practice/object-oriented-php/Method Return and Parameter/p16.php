<?php
class pen
{
    public $price=50;
    function PenType()
    {
        return $this->price;//return string type value like Econo
    }
}
$obj=new pen();
echo $obj->PenType();//here we will get Econo
?>