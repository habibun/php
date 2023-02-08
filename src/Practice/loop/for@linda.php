<html>
<head>
    <title>Loops: for</title>
</head>
<body>
<?php
/* for loops
for (expr1; expr2; expr3)
statement;
semicolons separate three expressions:
expr1 executed at start (initialize)
expr2 evaluated at the start of each loop, continues as long as it is
TRUE
expr3 executed at the end of each loop
{} around multi-line statements (like if-else)
watch out for infinite loops
*/
?>
<?php
// Outputs 1-10
for ($count=0; $count <= 10; $count++) {
    echo $count . ", ";
}
?>
</body>
</html>