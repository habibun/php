<?php
$number=10;//this is a global variables
function calculation()
{
    $number=45;//this is a local variables
    $another_number=55;
    $roll=$number+$another_number;
    echo $roll;
}
echo "the \$number variables value outside the function.txt is $number.";
echo "and function.txt into function.txt is ";
calculation();
?>