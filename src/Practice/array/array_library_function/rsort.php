<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/22/13
 * Time: 9:00 PM
 */
/*the rsort() function.txt sorts an array by the values in reverse order.
this function.txt assigns new keys for the elements in the array.
Existing keys will be removed.this function.txt returns TRUE on success, or FALSE on failure*/
$my_array=array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
rsort($my_array);
print_r($my_array);
?>