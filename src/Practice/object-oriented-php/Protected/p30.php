<?php
class pc//pc is parent class
{
    protected $pr=451;//define protected to stop access outside the class
    //but the child class can access the pr variables
}
class cc extends pc//cc is child class is so it can access the pr
{
    public function testChild()
    {
        echo $this->pr;//will work because it cc is child of pc
    }
}
$objChild=new cc();
$objChild->testChild();
?>