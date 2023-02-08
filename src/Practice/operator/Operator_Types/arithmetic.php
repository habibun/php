Addition:
<?php 
$a=5+6;
echo $a;
?> 

<?php 
$a=6;
echo $a+5; 
?> 


Subtraction:
<?php 
$a=12-8;
echo $a; 
?> 

<?php 
$a=12-8;
$c=$a-2;
echo $c; 
$d= $a - $c;
echo $d; 
?> 

Multiplication:

<?php 
$a=8*2;
echo $a; 
?> 

<?php 
$a=3*2;
$m=5;
$p=$a * $m;
echo $p;
?> 

Division:

<?php 
$a=18/3;
echo $a;
?> 

<?php 
$a=25;
$b=5;
$x=$a/$b;
echo $x;
?> 

Modulus:(mane vagses ja thake)
<?php 
$a=20%3;
echo $a;
?> 

<?php 
$a=29;
$b=5;
$x=$a%$b;
echo $x;
?> 

Increment:

<?php 
$a=2;
$a++;
echo $a;
?> 
wrong format:
<?php 
$a=8;
$p=$a++;
echo $p;
?> 

Decrement:

<?php 
$c=5;
$c--;
echo $c;
?>

a program using( Addition, Subtratcion, 
Multiplication, Division, Modulus):

<?php
$addition = 2 + 4; 
$subtraction = 6 - 2; 
$multiplication = 5*3; 
$division = 15/3; 
$modulus = 5%2; 
echo "Perform addition: 2 + 4 = ".$addition."<br />"; 
echo "Perform subtraction: 6 - 2 = ".$subtraction."<br />"; 
echo "Perform multiplication: 5 * 3 = ".$multiplication."<br />"; 
echo "Perform division: 15 / 3 = ".$division."<br />"; 
echo "Perform modulus: 5 % 2 = " .$modulus . " "." Modulus is the 
remainder after the division operation has been performed". "In this case it 
was 5 / 2, which has a remainder of 1.";
?> 

a program using(Post Increment and Pre Increment):

<?php 
$x = 4;
echo "The value of x with post-plusplus = " . $x++;
echo "<br /> The value of x after the post-plusplus is " .$x;
$x = 4;
echo "<br />The value of x with with pre-plusplus = " . ++$x;
echo "<br /> The value of x after the pre-plusplus is " . $x;
?> 

example:

<?php 
$add = 6 + 4; 
$sub = 6 - 4; 
$multi = 6 * 4; 
$div = 6 / 3; 
$mod = 10 % 2; 
echo " 6 + 4 = ".$add."<br />"; 
echo " 6 - 4 = ".$sub."<br />"; 
echo" 6 * 4 = ".$multi."<br />"; 
echo " 6/3 = ".$div."<br />"; 
echo " 10%2 = ".$mod."<br />"; 
?>

note:

  $a += $b; is the same as $a = $a + $b;
  $a -= $b; is the same as $a = $a - $b;
  $a *= $b;  is the same as $a = $a * $b;
  $a /= $b; is the same as $a = $a / $b;
  $a %= $b; is the same as $a = $a % $b;
  
 example:
 <html>
<head><title>Arithmetical Operators</title><head>
<body>
<?php
$a = 42;
$b = 20;
$c = $a + $b;
echo "Addtion Operation Result: $c <br/>";
$c = $a - $b;
echo "Substraction Operation Result: $c <br/>";
$c = $a * $b;
echo "Multiplication Operation Result: $c <br/>";
$c = $a / $b;
echo "Division Operation Result: $c <br/>";
$c = $a % $b;
echo "Modulus Operation Result: $c <br/>";
$c = $a++; 
echo "Increment Operation Result: $c <br/>";
$c = $a--; 
echo "Decrement Operation Result: $c <br/>";
?>
</body>
</html>

example:
<html>
<head>
<title>Arithmetic Operators for PHP</title>
</head>
<Body>
<form name="form1" method="post" action="index.php">
sum1 <input name="sum1" type="text"><br>  
sum2 <input name="sum2" type="text"><br>
sum3 <input name="sum3" type="text"><br>
<input type="submit" name="submit" value="Sum"><br>
</form>
<?php
$sum1=$_POST['sum1'];
$sum2=$_POST['sum2'];
$sum3=$_POST['sum3'];
$total_sum=$sum1+$sum2+$sum3;
echo $total_sum;
?>
</body>
</html>

example:
wrong format:
<?php
$applesBought = 5;
$applesSold = 3;
echo "Now I have " . $applesBought - $applesSold . " apples left";
?>
right format:
<?php
$applesBought = 5;
$applesSold = 3;
echo "Now I have " . ($applesBought - $applesSold) . " apples  left";
// Outputs:
// Now I have 2 apples left
?>

example:
<?php
// PHP has 5 primary math operators: addition, subtraction, multiplication, division, and modulus
        // These should be self explanatory with the exception of modulus. Modulus gives you the remainder of
// a division. For example, the modulus of 5 and 2 is  1, since 1 is the remainder. Here are examples:
echo 3 + 1; // Addition, output would be 4
echo 3 - 1; // Subtraction, output would be 2
echo 3 * 2; // Multiplication, output would be 6
echo 6 / 2; // Division, output would be 3
echo 7 % 4; // Modulus, output would be 3
// When dividing numbers, PHP will automatically give you a decimal number if there is a remainder.
// Notice above that I did not surround the numbers with quotes. Strictly speaking, a number in a programming
// language that is surrounded by quotes is no longer a number, but a string. PHP will, however, still perform
// mathematical operations on numbers inside of quotes, but it is recommended to avoid doing this.
// Here is an example of this:
echo '7' * '3';
// Will have the same output as this:
echo 7 * 3;
?>

example:
<?php 
$x=100; 
$y=60; 
echo "The sum of  x and y  is  : ". ($x+$y) ."<br />"; 
echo "The difference between  x and y  is  : ". ($x-$y) ."<br />";
echo "Multiplication of  x and  y :  ". ($x*$y) ."<br />"; 
echo "Division of  x and  y  : ". ($x/$y) ."<br  />"; 
echo "Modulus of  x and y  :  " . ($x%$y) ."<br />";   
    ?>

<?php
// addition
$var1 = 4;
$var2 = 5;
$total = $var1 + $var2;
echo "Total = " . $total;
// Total = 9
?>

<?php
// subtraction
$var1 = 8;
$var2 = 5; 
$total = $var1 - $var2;
echo "Total = " . $total;
// Total = 3
?>

<?php
// Division
$var1 = 15;
$var2 = 5;
$total = $var1 /   $var2;
echo "Total = " . $total;
// Total = 3
?>

<?php
// Modulus
$var1 = 15;
$var2 = 5;
$total = $var1 % $var2;
echo "Total = ".$total;
// Total = 0
?>

example:
<!DOCTYPE html PUBLIC "-//W3C//DTD/XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>A Web Page</title>
</head>
<body>
<p>

<?php
//The addition operator
$sum = 5 + 2;
$sum = 7;
$newsum = $sum + 4;
echo "The sum is " . $newsum;
        //The subtraction operator
$difference = $newsum - 2;
echo "The difference is " . $difference;
//The multiplication operator
$product = $difference * 3;
echo "The product is " . $product;
//The division operator
$quotient = $product / $difference;
echo "The quotient is " . $quotient;
//The Increment operator
$quotient++;
echo $quotient;
//The decrement operator
$quotient --;
echo $quotient;
?>
</p>
</body>
</html>