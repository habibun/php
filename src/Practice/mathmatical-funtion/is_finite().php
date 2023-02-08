<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/25/13
 * Time: 10:31 PM
 */
//is_finite() function.txt check the data is float or not
$number1 = 30003;
var_dump( is_finite($number1) ); // Outputs: bool(true)
?>

<?php
$number2 = log(0);
var_dump( is_finite($number2) ); // Outputs: bool(false)
?>