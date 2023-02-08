<?php
//loops executed a block of code a specified number of times, or while a specified condition is true.
//the for loop use when you know in advance how many times the script should run.

for ($i=1; $i<=5; $i++)
{
echo "The number is " . $i . "<br />";
}
?>


<?php
//another way to declare for loop

$i=1;
for (; $i<=5; $i++)
{
    echo "The number is " . $i . "<br />";
}
?>

<?php
//for loop with break
for($i=0;$i<10;$i++)
{
    echo
        $i."<br>";
    if ($i>7) break;
}
?>

<?php
//for loop with prime number check condition(prob)
$number = 29;
$isPrime = true;
$sqrt = floor(sqrt($number));
for ($i=2;$i<=$sqrt;$i++)
{
    if($number % $i == 0)
    {
        $isPrime = false;
        break;
    }
}
if ($isPrime)
    echo "{$number} is a prime number";
else
    echo "{$number} is not a prime number";
?>