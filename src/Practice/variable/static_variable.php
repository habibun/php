normal variable destroy after execution but static variables are not destroy after execution:

<?php
function test_stat() 
{
static $ekta_variable = 0;
$ekta_variable++;
echo $ekta_variable;
echo "<br />";
}
test_stat();
test_stat();
test_stat();
?>