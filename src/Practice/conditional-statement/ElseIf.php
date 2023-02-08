<?php
//use this statement to select one of several blocks of code to be executed
$d=date("D");
if ($d=="Fri")
    echo "Have a nice weekend!";
elseif ($d=="Sun")
    echo "Have a nice Sunday!";
else
    echo "Have a nice day!";
?>

<?php
$a=3;
$b=3;
if($a > $b)
{
    echo "a is bigger than b";
}
elseif($a == $b)
{
    echo  "a is equal to b";
}
else
{
    echo "a is smaller than b";
}
?>

<?php
//if elseif() function.txt is use to check several block of code
$planet = "Earth";
if ( $planet == "Mars")
{
    echo "Welcome to Earth, Mr Green";
}
else if($planet == "Jupiter")
{
    echo "Wow, I've never seen anyone from Jupiter before. How is that?";
}
else if($planet == "Saturn")
{
    echo "I really love the belt around your planet";
}
else
{
    echo "It's nice to meet you";
}
?>


<?php
$totalMarks = 56;
if ($totalMarks >= 80 AND $totalMarks <= 100)
{
    echo "Result: A+ Grade";
}
elseif($totalMarks >= 70 )
{
    echo "Result: A Grade";
}
elseif($totalMarks >= 60 )
{
    echo "Result: A- Grade";
}
elseif($totalMarks >= 50 )
{
    echo "Result: B Grade";
}
elseif($totalMarks >= 40 )
{
    echo "Result: C Grade";
}
elseif($totalMarks >= 33 )
{
    echo "Result: D Grade";
}
else
{
    echo "Result: F Grade";
}
?>
