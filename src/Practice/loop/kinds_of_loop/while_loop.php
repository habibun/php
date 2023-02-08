<?php
//the while() statement is used to execute a piece of code repeatedly as the while expression evaluates as true.
$number=1;
while($number<5)
{
echo "The number is " . $number . "<br />";
    $number++;
}
?>

<?php     //while loop with breaks      ?>
<?php
//the break statement is used to stop the execution of a loop.As an example the while loop below will stop when $number equals to 6.
$number=1;
while($number <10)
{
    echo "Number=".$number."<br>";
    if($number==6)
    {
        break;
    }
    $number+=1;
}
?>

<?php
//while loop with breaks
$floor=1;
while($floor <=5)
{
    $room=1;
    while($room<40)
    {
        echo "Floor:$floor,room number:$floor"."$room<br>";
        if($room==2)
        {
            break;
        }
        $room+=1;
    }
    $floor+= 1;
    echo "<br>";
}
?>

<?php
//while loop with breaks and continue(problem here)

$number=1;
while($number<=10)
{
    echo "Number=".$number."<br>";
    if($number==10)
    {
        break;
        continue;
    }
    $number+=1;
}
?>

<?php
$i=0;
while ($i<10)
{
    echo $i."<br/>";
    if($i>7) break;
    $i = $i+1;
}
?>