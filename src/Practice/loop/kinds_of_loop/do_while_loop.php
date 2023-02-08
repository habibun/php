<?php
/*
do while statements are similar to while statements except that the condition is tested at the end of each iteration,
rather than at the beginning.this means that the loop will always execute at least once.
*/
$i=0;
do{
    $i++;
    echo "The number is " . $i . "<br />";
}
while ($i<5);
?>


<?php
$i=0;
do
{
    echo $i."<br />";
    if ($i > 7) break;
    $i++;
}
while($i < 10);
?>