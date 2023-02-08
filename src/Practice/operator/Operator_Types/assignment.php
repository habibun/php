<?php
echo "<h1>assignment operator<h1>";
?>

<?php echo "use of Addition( + )" ?>
<?php
$a=15;
$b=4;
$sum = $a + $b; //use of Addition
echo $sum;
echo "<br/>";

$a+=8; //use value directly
echo $a;
echo "<br/>";

$a+=$b; //use of Addition another way
echo $a;
?>


<?php echo "use of Subtraction( - )" ?>
<?php
$a=15;
$b=4;
$sum = $a - $b; //use of Subtraction
echo $sum;
echo "<br/>";

$a-=8; //use value directly
echo $a;
echo "<br/>";

$a-=$b; //use of Subtraction another way
echo $a;
?>


<?php echo "use of Multiplication( * )" ?>
<?php
$a=15;
$b=4;
$sum = $a * $b; //use of Multiplication
echo $sum;
echo "<br/>";

$a*=8; //use value directly
echo $a;
echo "<br/>";

$a*=$b; //use of Multiplication another way
echo $a;
?>


<?php echo "use of Division( / )" ?>
<?php
$a=15;
$b=4;
$sum = $a / $b; //use of Division
echo $sum;
echo "<br/>";

$a/=8; //use value directly
echo $a;
echo "<br/>";

$a/=$b; //use of Division another way
echo $a;
?>


<?php echo "use of Modulus( % )" ?>
<?php
$a=15;
$b=4;
$sum = $a % $b; //use of Modulus
echo $sum;
echo "<br/>";

$a%=8; //use value directly
echo $a;
echo "<br/>";

$a%=$b; //use of Modulus another way
echo $a;
?>


<?php /*This Block of PHP Code represent the use of PHP ASSIGNMENT OPERATORS*/?>
<?php
$x=5; //Variable "x" with value 5.
$y=3; //Variable "y" with value 3.

// Use of += operator.
$x+=$y;
echo "Result Of Addition: ";
echo $x;
echo "<br/>";

// Use of -= operator.
$x-=$y;
echo "Result Of Subtraction: ";
echo $x;
echo "<br/>";

// Use of *= operator.
$x*=$y;
echo "Result Of Multiplication: ";
echo $x;
echo "<br/>";

// Use of /= operator.
$x/=$y;
echo "Result Of Division: ";
echo $x;
echo "<br/>";

// Use of .= operator.
$x.=$y;
echo "Result Of Concatenation: ";
echo $x;
echo "<br/>";

// Use of %= operator.
$x%=$y;
echo "Result Of Modulus: ";
echo $x;
echo "<br/>";

// Use of = operator.
$x=$y;
echo "Result Of Assignment: ";
echo $x;
echo "<br/>";
?>

<?php //end of assignment operator?>