<?php
// Five steps to PHP database connections:
// 1. Create a database connection
// (Use your own servername, username and password if they are different.)
// $connection allows us to keep refering to this connection after it is established
$connection = mysql_connect("localhost","root","");
if (!$connection) {
    die("Database connection failed: " . mysql_error());
}
// 2. Select a database to use
$db_select = mysql_select_db ("test",$connection);
if (!$db_select) {
    die("Database selection failed: " . mysql_error());
}
?>