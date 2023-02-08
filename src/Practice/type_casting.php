<html>
<head>
    <title>Type Casting</title>
</head>
<body>
<?php
// PHP will try to convert between types (strings, number, arrays, etc.) as best it can
// Sometimes it will make educated guesses as to what you mean
// For example, if you add a string and a number like this:
$var1 = "2 brown foxes" ;
$var2 = $var1 + 3;
echo $var2;
?>
<br />
<?php
// gettype will retrieve an item's type
echo gettype($var1); echo "<br />";
echo gettype($var2); echo "<br />";
// settype will convert an item to a specific type
settype($var2, "string");
echo gettype($var2); echo "<br />";
// Or you can specify the new type in parentheses in front of the item
$var3 = (int) $var1;
echo gettype($var3); echo "<br />";
?>
<?php // You can also perform tests on the type (which return booleans) ?>
is_array: <?php echo is_array($var1); // result: false ?><br />
is_bool: <?php echo is_bool($var1); // result: false ?><br />
is_float: <?php echo is_float($var1); // result: false ?><br />
is_int: <?php echo is_int($var1); // result: false ?><br />
is_null: <?php echo is_null($var1); // result: false ?><br />
is_numeric: <?php echo is_numeric($var1); // result: false ?><br />
is_string: <?php echo is_string($var1); // result: true ?><br />
</body>
</html>