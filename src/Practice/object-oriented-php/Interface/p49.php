<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/15/14
 * Time: 10:16 PM
 */
interface tem
{
    public function f1();
}
class test implements tem
{
    public function f1()
    {
        echo "Hello";
    }
}
$h=new test();
$h->f1();
?>