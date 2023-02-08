<?php
//filename: /home/masnun/phpbook/math-1-is_infinite.php
$number1 = 30003;
var_dump( is_infinite($number1) ); // Outputs: bool(false)
?>


<?php 
$number2 = log(0);
var_dump( is_infinite($number2) ); // Outputs: bool(true)
?>
