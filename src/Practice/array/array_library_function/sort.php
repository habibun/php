<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/25/13
 * Time: 11:45 AM
 */
/*the sort() function.txt sorts an array by the values.
This function.txt assigns new keys for the elements in the array.
Existing keys will be removed.This function.txt returns TRUE on success, or FALSE on failure*/
$my_array=array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
sort($my_array);
print_r($my_array);
?>

<?php
$data = array("g", "t", "a", "s");
sort($data);
print_r($data);
?>