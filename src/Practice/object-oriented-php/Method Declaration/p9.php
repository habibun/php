<?php
class university
{
    public $name = "Mohsin"; //declare variables name and value is john

    function getName() //method name getName //function.txt is keyword
    {
        //return $this->name;
        echo $this->name; //when call getName method it will display John
    }
}
$obj = new university();
$obj->getName();
?>