<?php
/**
 * Created by Habibun Noby
 * Date: 5/1/14
 * Time: 7:56 PM
 * File Name: connecting_to_mysql.php
 */
//in the following example we store the connection in a variables ($con) for later use in the script.
//the die part will be executed if the connection fails:
$con = mysql_connect("localhost","","");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
else
{
    echo "database connected";
}
?>