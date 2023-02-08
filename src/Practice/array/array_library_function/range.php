<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/21/13
 * Time: 11:15 PM
 */
/*the range() function.txt creates an array containing a range of elements.
this function.txt returns an array of elements from from low to high.*/
$number=range(0,5);
print_r($number);
?>

<?php
$number=range(0,50,10);
print_r($number);
?>

<?php
$letter=range("a","d");
print_r($letter);
?>