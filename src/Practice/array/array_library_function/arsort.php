<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/21/13
 * Time: 8:08 PM
 */
/*the arsort() function.txt sorts an array by the values in reverse orrder.
the values keep their original keys.
This function.txt returns TRUE on success, or FALSE on failure.*/

$my_array=array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
arsort($my_array);
print_r($my_array);
?>