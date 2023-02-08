<?php "<h1>Comparison Operator</h1>" ?>

<?php echo "use of Equal to ( == )" ?>
<?php
$jony=5;
if ($jony==5)//use equal to
{
	echo "this is a comparison test";
}
else
{
	echo "error";
}
?>

<?php //another example ?>
<?php
$variable = 5;
if ($variable == 5)
{
echo 'Equal to 5';
}
if ($variable == 6)
{
echo 'Equal to 6';
}
echo '<br />Do this either way..';
?>

<?php //another example ?>
<?php
$variable = 5;
if ($variable == 5)
echo 'Equal to 5';
if ($variable == 6)
echo 'Equal to 6';
echo 'Do this either way..';
?>

<?php //another example ?>
<?php
$button = "pressed";
if  ($button == "pressed") {
echo "I am alive and will now perform Sex Machine by James Brown";
}
?>

<?php //another example ?>
<?php
$name = "Jimmy";
If ($name=="Jimmy") {
    echo "Yes, your  name  is Jimmy!"; // echo  makes the page displays what's  in quotations.
}
?>

<?php //another example ?>
<?php
$str="PHP";
if ($str=="PHP")
echo "Condition is true.";
?>

<?php //another example ?>
<?php
$str="PHP";
if ($str=="PHP")
{ echo "Condition is true.";
echo "This will help to understand PHP better.";
}
?>

<?php //another example ?>
<?php
$number=100;
if ($number == 100) echo "one hundred";
?>









<?php echo "use of Not equal to ( != )" ?>
<?php
$jony=5;
if ($jony==5)//use of not equal to
{
	echo "this is a comparison test";
}
else
{
	echo "error";
}
?>



<?php echo "use of Less than ( < )" ?>
<?php
$jony=4;
if ($jony<5)//use of less than
{
	echo "this is a comparison test";
}
else
{
	echo "error";
}
?>

<?php //another example ?>
<?php
// Number comparison
$a="C";
$b="X";
if ($a<$b)
{
echo $a."is smaller than".$b;
}
// Result : C is smaller than X
?>


<?php echo "use of Greater than ( > )" ?>
<?php
$jony=4;
if ($jony>5)//use of Grater than
{
	echo "this is a comparison test";
}
else
{
	echo "error";
}
?>

<?php //another example ?>
<?php
if(15>20)
{
echo "welcome Dhaka";
}
echo "welcome America";
?>

<?php //another example ?>
<?php
$a=20;
$b=15;
if($a>$b)
{
echo "welcome Dhaka";
}
echo "welcome America";
?>

<?php //another example ?>
<?php
$x1=150;
$y1=120;
if ($x1>$y1)
echo "The value of x1 greater than y1";
?>

<?php //another example ?>
<?php
$x1=150;
$y1=120;
if ($x1>$y1)
{
echo "The value of x1 greater than y1.<br />";
echo "More than one statement within if statement.";
}
?>

<?php //another example ?>
<?php
$x1=150;
$y1=120;
$z1=140;
if ($x1>$y1)
{
if ($x1>$z1)
echo " x1 is greater than y1 and z1";
}
?>

<?php //another example ?>
<?php
$a = 6;
if ($a > 5) {
echo "I evaluated the value of a";
echo "and found it to be";
echo "bigger than 5";
}
?>

<?php //another example ?>
<?php
$x = 11;
if($x > 10){
echo "$x is greater than 10";
}
?>



<?php echo "use of Less than equal to ( <= )" ?>
<?php
$jony=4;
if ($jony<=5) //use of Less than equal to
{
	echo "this is a comparison test";
}
else
{
	echo "error";
}
?>

<?php //another example ?>
<?php
$number = 5;
if ($number <= 10)
{
echo "The number is less than or equal to 10.";
}
?>



<?php echo "use of Greater than equal to ( <= )" ?>
<?php
$jony=4;
if ($jony>=5) //Greater than equal to
{
	echo "this is a comparison test";
}
else
{
	echo "error";
}
?>



<?php //use of Nested if ?>
<?php
$a=10;
if($a>2)
{
if($a==10)
{
echo "This is True";
}
}
?>
