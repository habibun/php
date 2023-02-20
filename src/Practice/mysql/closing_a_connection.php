<?php
/**
 * Created by Habibun Noby
 * Date: 5/1/14
 * Time: 8:06 PM
 * File Name: closing_a_connection.php
 */
$con = mysql_connect("localhost","root","");
if (!$con) {
    die("Could not connect: ".mysql_error());
}
else {
    echo "database connected successfully";
}
mysql_close();
?>
