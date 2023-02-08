<?php
class Myclass
{
    public $title;
    public function DispTitle()
    {
        echo $this->title;
        echo "<br/>";
    }
}
$obj = new MyClass();
$obj->title="ABCXYZ";
echo $obj->title;
echo "<br/>";
echo $obj->DispTitle();
?>