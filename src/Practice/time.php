<html>
<head>
</head>
<body>

Example number 1:
<?php
$time=date("h:i:s A", strtotime("now"-50));
echo $time;
?>


Example Number 2:
<?php
$time_now=mktime(date('h')+3,date('i')+60,date('s'));
echo date("h:i:s",$time_now);
?>  


Example number 3:
<?php
$time_offset ="480.1"; // Change this to your time zone
$time_a = ($time_offset * 120);
$time = date("h:i:s",time() + $time_a);
echo 'Current time is : '.$time;
?>  