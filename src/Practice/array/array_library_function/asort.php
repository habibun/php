<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/21/13
 * Time: 7:58 PM
 */
/*asort() function.txt sorts an array by the values.The values keep their original keys.
This function.txt returns TRUE on success, or FALSE on Failure.*/

$my_array=array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
asort($my_array);
print_r($my_array);
?>