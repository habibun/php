<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/25/13
 * Time: 12:44 PM
 */
//count the values and output it's quantum.in here quantum is value and element is key
$var_array = array(1, "world", "world", 1, 5, 4,  4);
echo '<pre>';
print_r(array_count_values($var_array));
echo '</pre>';
?>