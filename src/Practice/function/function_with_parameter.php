function with single parameter:
<?php
function writeMyName($fname){
    echo $fname . " Refsnes.<br />";
}
echo "My name is ";
writeMyName("Kai Jim");

echo "My name is ";
writeMyName("Hege");

echo "My name is ";
writeMyName("Stale");
?>

following function has two parameters:
<?php
function writeName($fname, $punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br />";
}

echo "My Name is ";
writeName("Kai Jim",".");

echo "My Name is ";
writeName("Hege","!");

echo "My Name is ";
writeName("Stale","...");
?>

function with double parameter(assign value directly):
<?php
function Calculation($firstNumber, $secondNumber){
    $total = $firstNumber + $secondNumber;
    echo "Result is $total<br />";
}
Calculation(5,6);
Calculation(10,20);
Calculation(8,9);
?>

function with double parameter assign value indirectly:
<?php
function aCalculation($firstNumber, $secondNumber){
    $total = $firstNumber + $secondNumber;
    echo "Result is $total<br />";
}
$argument1 = 6;
$argument2 =10;
aCalculation($argument1,$argument2);
?>


<?php
//you can set parameter value before function.txt declaration(only last parameter is definable)
//in function.txt declaration you can set two parameter value when you do this load it's default result
//this process is called passing argument by value.

function bCalculation($firstNumber, $secondNumber = 20){
    $total = $firstNumber + $secondNumber;
    echo "Result is $total<br />";
}
bCalculation(100);
?>


<?php
//passing argument by reference

$cost = 100;
$vat = 0.15;
function calculatePrice(&$cost, $vat)
{
    $cost = $cost + ($cost * $vat);
    $vat+= 4;
}
calculatePrice($cost, $vat);
printf("Vat is %06.2f%% ", $vat*100);
printf("Cost is: $%07.2f", $cost);
?>










