<html>
<head>
    <title>Functions</title>
</head>
<body>
<?php
/* User-defined functions
function.txt name($argument1, $argument2 ...) {
statement
}
does NOT require semicolons except after statements
{} go around function.txt statements
Functions can call any PHP code, even other functions
Function name can contain letters, numbers, underscores, dashes (no spaces)
but name must start with a letter or underscore
Names are case-insenstive but it is better to call them exactly as they were defined
In PHP3, functions must be defined prior to calling them
In PHP4/5, can appear anywhere (base-level functions are pre-processed)
Once defined, functions can be called from anywhere
Once defined, functions can't be redefined
Avoid declaring functions inside functions or conditionals while you are beginner. (It's no
problem for you to CALL functions from inside funtions though!)
*/
?>
<?php
// a simple function.txt
function say_hello() {
    echo "Hello World!<br />" ;
}
say_hello();
// a function.txt with 1 argument
function say_hello2($word) {
    echo "Hello {$word}!<br />";
}
say_hello2("World");
// functions must be called with the same number of arguments as were defined
// Functions can be called more than once (that's the point!) with different arguments
say_hello2("Everyone");
?>
<?php
// A variables can be passed as an argument
// The variables name has no relationship to the argument name
$name = "John Doe";
say_hello2($name);
?>
<?php
// function.txt with multiple arguments 26
function say_hello3($greeting, $target, $punct) {
    echo $greeting . ", " . $target . $punct . "<br />";
}
say_hello3("Greetings" , $name, "!");
?>
<br />
<?php
// a more practical function.txt example than Hello World!
// uses return to explictly return a value
function addition($val1, $val2) {
    $sum = $val1 + $val2;
    return $sum;
}
// VERY good habit to ALWAYS return a value from a function.txt
// return exits the function.txt and returns a value to where the function.txt call was made
// don't put parentheses around value to be returned
// returned values can be assigned to variables
$new_val = addition(3,4);
echo $new_val;
// returned values can be used in logical expressions
if (addition(5,6) == 11) {
    echo "Yes";
}
// Return can only return ONE value
// To return more than one value, put them all into an array and return the array
// This function.txt adds, then subtracts, then returns both results as an array
function add_subt($val1, $val2) {
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    $result = array($add, $subt);
    return $result;
}
$result_array = add_subt(10,5); echo
    "Add: " . $result_array [0]; echo
    "Subt: " . $result_array [1];
?>
</body>
</html>