<html>
<head>
    <title>Loops: break</title>
</head>
<body>
<?php /* break
Breaks out of a loop immediately without performing remaining
statements or further loop cycles
*/
// Notice that the for loops had a comma after 10
// We could fix that this way:
for ($count=0; $count <= 10; $count++) {
    echo $count;
    if ($count == 10) { break; }
    echo ", ";
}
?>
</body>
</html>