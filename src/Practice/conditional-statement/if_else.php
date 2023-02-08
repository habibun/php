<?php
//use this statement to execute some code if a condition is true and another code if the condition is false
//if else condition use to check only one condition

$d=date("D");
if ($d=="Fri")
    echo "Have a nice weekend!";
else
    echo "Have a nice day!";
?>


<?php
//If more than one line should be executed if a condition is true/false, the lines should be enclosed within curly braces:

$d=date("D");
if ($d=="Fri")   {
    echo "Hello!<br />";
    echo "Have a nice weekend!";
    echo "See you on Monday!";
}
else {
    echo "this is a not Friday<br />";
    echo "this is Monday";
}
?>


<?php
$number = 11;
if( ($number%2) == 1)//this line is condition or logical expression
{
    echo "{$number} is odd number";
}
else
{
    echo "{$number} is even number";
}
?>