<html>
<head>
    <title>Second Page</title>
</head>
<body>
<?php
// view values in $_GET array
print_r($_GET);
// assign $_GET array values to variables for easier use
$id = $_GET['id'];
$name = $_GET['name'];
echo "<br /><strong>" . $id . ": {$name}</strong>";
?>
<br />
<?php
// illustrating the difference between urlencode and rawurlencode
$string = "kevin
skoglund" ; echo
urlencode($string)
; echo "<br />";
echo rawurlencode($string);
?>
</body>
</html>