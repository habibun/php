<html>
<head>
    <title>Form Processing </title>
</head>
<body>
<?php
// Ultra-simple form processing
// Just retrieve the value and return it to the browser
$username = $_POST['username'];
$password = $_POST['password'];
echo "{$username}: {$password}";
?>
</body>
</html>