<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/20/13
 * Time: 10:29 PM
 */

//the array_pad() function.txt inserts a specified number of elements, with a specified value, to an array.
$a=array("Dog","Cat");
print_r(array_pad($a,5,0));
?>

<?php
$a=array("Dog","Cat");
print_r(array_pad($a,-5,0));
?>