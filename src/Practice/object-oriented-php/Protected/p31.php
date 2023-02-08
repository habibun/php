<?php
class paret
{
    protected $pr;
    public $a;
    protected function testParent()
    {
        echo "this is a test";
    }
}
class child extends paret
{
    public function testChild()
    {
        $this->testParent();//will work because it
    }
}
$objParet=new paret();
//$objParet->testParent();//Throw error
$objChild=new child();
$objChild->testChild();
?>