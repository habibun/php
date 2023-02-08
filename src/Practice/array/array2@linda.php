<html>
<head>
    <title>Arrays</title>
</head>
<body>
<? /*
Think of an array like an expandable file folder where you can
put items in each of the pockets
There are no limits to how many pockets it can have (not that
you'll need to worry about at least)
Then you can reference those items by the
pocket number (or "index") (This is the "value"
of that "position" in the array)
Be careful! Pockets are numbered starting at 0 (0,1,2,3...) so
the index of the 2nd
pocket is 1
*/?>

<?php
// defining a simple array
$array1 = array(4,8,15,16,23,42);
// referencing an array value by its index
echo $array1[0];
// arrays can contain a mix of strings, numbers, even other arrays
$array2 = array(6,"fox", "dog", array("x", "y", "z"));
// referencing an array value that is inside another array
echo $array2[3][1];
?>
<br />
<?php
// Changing values in an array that has already been defined
// It's just like variables but you use the index to reference the array position
$array2[3] = "cat";
echo $array2[3];
?>
<br />
<?php
// You can also assign labels to each pocket (called "keys"),
$array3 = array("first_name" => "Kevin", "last_name" => "Skoglund");
// which will allow you to use the key to reference the value in that array position.
echo $array3["first_name"] . " " . $array3["last_name"] . "<br />";
$array3["first_name" ] = "Larry";
echo $array3["first_name"] . " " . $array3["last_name"] . "<br />";
?>
<br />
A good way to see the values inside an array during development: <br />
<pre><?php print_r($array2); ?></pre>
</body>
</html>