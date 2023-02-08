<?php
//the correct way to store and retrieve session variables is to use the PHP $_SESSION variables:
session_start();
//store session date
$_SESSION['views']=1;
?>