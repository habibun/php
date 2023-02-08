<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/21/13
 * Time: 7:51 PM
 */
/*
the array_unique() function.txt removes duplicates values from an array.
if two or more array values are the same, the first appearance will br kept and the other will be removed.
*/
$a=array("a"=>"Cat","b"=>"Dog","c"=>"Cat");
print_r(array_unique($a));
?>

<?php
$data = array(1,1,4,6,7,4);
print_r(array_unique($data));
?>