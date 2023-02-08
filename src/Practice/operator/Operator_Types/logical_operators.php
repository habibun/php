<html>
<head>
    <title>Logical Expressions </title>
</head>
<body>
<?php
/* if, elseif, else
if (expression)
statement;
does NOT require semicolons except after statements
{} go around multi-line if-statements
{} are optional for single-line if-statments but I strongly suggest them
expressions always evaluate to a boolean value (true/false)
expressions can use comparison operators (==, !=, >, <, >=, <=)
*/
?>
<?php
$a = 5;
$b = 4;
if ($a > $b) {
    echo "a is larger than b" ;
} elseif ($a == $b) { // if 1st expression is false, elseif performs a 2nd test
    echo "a equals b";
} else { // if all expressions are false, else gives an alternative statement
    echo "a is smaller than b" ;
}
?>
<br />
<?php
// Expressions can also use logical operators to combine expressions
// && is a logical AND
// || is a logical OR
$c = 1;
$d = 20;
if (($a > $b) && ($c > $d)) {
    echo "a is larger than b AND " ;
    echo "c is larger than d" ;
}
if (($a > $b) || ($c > $d)) {
    echo "a is larger than b OR " ;
    echo "c is larger than d" ;
} else {
    echo "neither a is larger than b or c is larger than d" ;
}
?>
<br />
<?php
// ! is a logical NOT and it negates an expression
unset($a);
if (!isset($a)) { // read this as "if not isset $a" or "if $a is not set"
    $a = 100;
}
echo $a;
?>
<br />
<?php
// Use a logical test to determine if a type should be set
if (is_int($a)) {
    settype ($a, "string");
}
echo gettype($a);
?>
</body>
</html>