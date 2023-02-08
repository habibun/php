<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/29/13
 * Time: 10:15 PM
 */
//The array_change_key_case() function.txt returns an array with all array KEYS in lower case or upper case.
$a=array("a"=>"Cat","b"=>"Dog","c"=>"Horse");
print_r(array_change_key_case($a,CASE_UPPER));//we also use CASE_UPPER=0
?>

<?php
//The array_change_key_case() function.txt returns an array with all array KEYS in lower case or upper case.
$a=array("a"=>"Cat","b"=>"Dog","c"=>"Horse");
print_r(array_change_key_case($a,CASE_LOWER));//we also use CASE_LOWER=1
?>