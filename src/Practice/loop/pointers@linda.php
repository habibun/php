<html>
<head>
    <title>Loops: pointers </title>
</head>
<body>
<?php // Pointers and while loops revisited
$ages = array(4, 8, 15, 16, 23, 42);
?>
<?php
// Arrays have pointers that point to a position in the array
// We can use current, next and reset to manipulate the pointer
echo "1: " . current($ages) . "<br />";
next($ages);
echo "2: " . current($ages) . "<br />";
reset($ages);
echo "3: " . current($ages) . "<br />";
?>
<br />
<?php
// while loop that moves the array pointer
// It is important to understand this type of loop before working with databases
while ($age = current($ages)) {
    echo $age . ", ";
    next($ages);
}
?>
</body>
</html>