<html>
<head>
    <title>Loops: while</title>
</head>
<body>
<?php /* while loops
while(expression)
statement;
{} around multi-line statements (like if-statements)
watch out for infinite loops
*/
// This loop outputs 0-10
$count = 0;
while ($count <= 10) {
    echo $count . ", ";
    $count++;
}
echo "<br />Count: {$count}";
?>
<br />
<?php
// Loops can be combined with if-statements
$count = 0;
while ($count <= 10) {
    if ($count == 5) {
        echo "FIVE, ";
    } else {
        echo $count . ", ";
    }
    $count++;
}
echo "<br />Count: {$count}";
?>
</body>
</html>