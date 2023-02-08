<?php
//filename: /home/masnun/phpbook/math-1-is_finite.php
$number1 = 30003;
var_dump( is_finite($number1) ); // Outputs: bool(true)
?>


<?php 
$number2 = log(0);
var_dump( is_finite($number2) ); // Outputs: bool(false)
?>
