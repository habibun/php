<!--just for example:(not related)-->
<?php
$number=10;
function calculation()
{
	$number=45;
	$another_number=55;
	$roll=$number+$another_number;
	echo $roll;
}
echo "the \$number variables value outside the function.txt is $number.";
echo "and function.txt into function.txt is ";
calculation();
?>

<!--to declare Global Variable there are two ways:
first way:-->
<?php
$number = 8;
function calculation(){
$GLOBALS["number"];
$number = 10;
$anothernumber = 20;
$addnumber = $number+$GLOBALS["number"];
echo $addnumber;
}
calculation();
?>

<!--second way:-->
<?php
$number = 8;
function calculation(){
global $number; 
$number = 10;
$anothernumber = 20;
$addnumber = $number+$number;
echo $addnumber;
}
calculation();
?>


<!--follow this other code:to understand the second way of code:-->
<?php
$number = 10;
$number = 20;
$number = 30;
echo $number;
?>