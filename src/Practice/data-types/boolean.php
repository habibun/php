<?php
//boolean values are true or false ,also 0 and empty string evalutes to false,
//and any numeric value rather than zero or a string that is not empty evalutes to true.
$bool = true;
echo $bool;
?>


<?php
/* booleans are used to represent the concepts of
true and false.
They are most often used for testing if a statement is
true or false and they'll play a bigger role when we
discuss logical expressions.
Note that there is a difference between
boolean true/false and the strings
"true"/"false".
*/
$bool1 = true;
$bool2 = false;
// When booleans are displayed, PHP will attempt to convert them into a string
// You'll get either "1"/"0" or "1"/"" instead of true/false
?>
$bool1: <?php echo $bool1; ?><br />
$bool2: <?php echo $bool2; ?><br />