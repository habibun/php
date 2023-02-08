<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/25/13
 * Time: 10:39 PM
 */
 //is_infinite() function.txt check the data is float or not
$number1 = 30003;
var_dump( is_infinite($number1) ); // Outputs: bool(false)
?>

<?php
$number2 = log(0);
var_dump( is_infinite($number2) ); // Outputs: bool(true)
?>
