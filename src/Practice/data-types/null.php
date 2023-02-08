<?php
/* NULL is used to represent the concept of nothing or the state
of being empty
In the below example three variables have been set,
then boolean tests are performed and the results are
output as a string
*/
$var1 = 3;
$var2 = "cat";
$var4 = NULL;
// isset tests whether a variables has been set
// It returns true or false as a result of the test.
?>
$var1 is set: <?php echo isset($var1); // result: true ?><br />
$var2 is set: <?php echo isset($var2); // result: true ?><br />
$var3 is set: <?php echo isset($var3); // result: false ?><br />
<?php unset($var1); ?>
$var1 is set: <?php echo isset($var1); // result: false ?><br />
$var2 is set: <?php echo isset($var2); // result: true ?><br />
$var3 is set: <?php echo isset($var3); // result: false ?><br />
<br />
<?php // empty test whether a variables is empty ?>
$var1 empty: <?php echo empty($var1); // result: true ?><br />
$var4 empty: <?php echo empty($var4); // result: true ?><br />