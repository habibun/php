<html>
<head>
    <title>Databases</title>
</head>
<body>
<?php include('Database_Connection.php'); ?>
<?php
// 3. Perform database query
$result = mysql_query("SELECT * FROM subjects" , $connection);
if (!$result) {
    die("Database query failed: " . mysql_error());
}
// 4. Use returned data
while ($row = mysql_fetch_array ($result)) {
    echo $row["menu_name"]." ".$row["position"]."<br />";
}
?>
</body>
</html>

<?php
// 5. Close connection
mysql_close($connection);
?>