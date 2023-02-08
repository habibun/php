<?php
$number = 8;
function calculation()
{
$number = 10;
$anothernumber = 20;
$addnumber = $number+$anothernumber;
echo $addnumber;
}
echo "This \$number variables from outside of calculation() function.txt and its
value is $number";
echo "</br>";
calculation();
?>

<?php
//if you use back slash in a strings.it is also escaped by backslash(\)
echo 'C:\\windows';         // OUTPUT: C:\windows
?>