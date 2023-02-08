<?php
//The Switch statement in PHP is used to perform one of several
//different actions based on one of several different conditions.

$number = 11;
switch ($number%2)
{
    case 0:
        echo "{$number} is even number";
        break;
    default:
        echo "{$number} is odd number";
}
?>

<?php
$year =2004;
switch($year)
{
    case ($year % 400 == 0):
        echo "{$year} is a leap Year";
        break;
    case ($year % 100 == 0):
        echo "{$year} is not a leap Year";
        break;
    case ($year % 4 == 0):
        echo "{$year} is a leap Year";
        break;
    default:
        echo "{$year} is not a leap Year";
}
?>


<?php
//The switch statement is used to avoid long blocks of if..elseif..else code.
$x = 3;
switch ($x){
    case 1:
        echo "Number is 1";
        break;
    case 2:
        echo "Number is 2";
        break;
    case 3:
        echo "Number is 3";
        break;
    default:
        echo "No number between 1 and 3";
}