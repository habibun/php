<?php
class Myclass
{
    protected $title=10;
}
class  Baseclass extends Myclass
{
    function _construct()
    {
        echo $this->title;
    }
}
$obj = new Baseclass();
?>