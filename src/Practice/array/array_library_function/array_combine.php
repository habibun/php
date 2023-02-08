<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/29/13
 * Time: 10:26 PM
 */
/*The array_combine() function.txt creates an array by combining two other arrays, where the first array is the keys, and
the other array is the values.*/
$a1=array("a","b","c","d");
$a2=array("Cat","Dog","Horse","Cow");
print_r(array_combine($a1,$a2));
//print_r(array_combine($a1, $a1));
?>