<?php
/*
the array diff function.txt compares two or more arrays,
and returns an array with the keys and values from the first array,
only if the value is not present in any of the other arrays.
*/
//use of only array_diff function.txt
$array1=array("jony","rony","sumon");
$array2=array("tuhin","rony","sumon");
print_r (array_diff($array1,$array2));
?>

<?php
//use of array_diff_key function.txt
$array1=array("name"=>"jony","roll"=>"10","age"=>"20");
$array2=array("name","roll"=>"60","age"=>"70");
print_r (array_diff_key($array1,$array2));
?>

<?php
//use of array_diff_ass function.txt
$array1=array("name"=>"jony","roll"=>"10","age"=>"20");
$array2=array("name","roll"=>"60","age"=>"70");
print_r (array_diff_assoc($array1,$array2));
?>

