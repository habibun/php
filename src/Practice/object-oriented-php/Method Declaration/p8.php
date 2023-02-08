<?php
class university
{
    public $name = "John"; //declare variables name and value id john
    function getName() //method name getName //function.txt id keyword
    {
        //return $this->name;
        echo $this->name;//when call getName method it will display John
    }
}
$obj = new university();
$obj ->getName();
?>