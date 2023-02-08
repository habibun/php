<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/15/14
 * Time: 10:23 PM
 */
interface employee
{
    function setdata($empname,$empage);
    function outputData();
}
class Payment implements employee
{
    function setdata($empname,$empage)
    {
        //setdata method funtionality if any
    }
    function outputData()
    {
        echo "Inside Payment Class";
    }
}
$p=new Payment();
$p->outputData();
?>