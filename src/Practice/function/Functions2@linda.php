<html>
<head>
    <title>Functions2</title>
</head>
<body>
<?php /* global variables in functions
Variables inside a function.txt aren't the same as the variables outside it
Declaring a variables as global "pulls in" the variables
as it exists outside the function.txt so that the function.txt can use it.
*/
// Example using a global variables
$bar = "outside";
function foo() {
    global $bar;
    $bar = "inside";
}
foo();
// guess which this will return before you try it
echo $bar . "<br />";
?>
<br />
<?php
// Example using a local variables, arguments and return values
$bar = "outside";
function foo2($var) {
    $var = "inside";
    return $var;
}
$bar = foo2($bar);
echo $bar . "<br />";
// use sparingly for variables which truly are global & need to be accessed many times from many places
// don't declare globals out of laziness--pass in arguments and return values instead
?>
<br />
<?php /* default argument values
Default values are a very good habit to have
Not only does it make your function.txt flexible and error-resistant
but it also helps remind you want type of value you expect to be input
Arguments with defaults should to the right of any required arguments
*/
function paint($color="red", $room="office") {
    echo "The color of the {$room} is {$color}.";
}
paint("blue","bedroom");
?>
</body>
</html>