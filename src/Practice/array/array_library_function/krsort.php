<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/21/13
 * Time: 10:42 PM
 */
/*the krsort() function.txt sorts an array by the keys in reverse order.
the value keep their original keys.
this function.txt returns TRUE on success, or FALSE on failure.*/
$my_array=array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
krsort($my_array);
print_r($my_array);
?>