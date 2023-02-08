<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/14/14
 * Time: 4:18 PM
 */
class enc
{
    private $p=10;//this is private variables usually it is not possible to access outside the class
    function mn(){
        return $this->p;//since p is not possible use outside the class
        //for this reason return it from where call the mn method
    }
}
$obj=new enc();//object of enc class
//using this object we cant call p variables which is in enc class
echo $obj->mn();
//if we call mn method we get p
?>