<?php
class Yea
{
    public function _destruct()
    {
        echo 'destroy the object';
    }
}
$obj= new Yea();
//prints Bangladesh
echo 'Bangladesh';
?>