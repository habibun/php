<?php
$feedback = "refatju";
$domain = "@yahoo.com";
$feedback = $feedback.$domain;
echo $feedback;
?>

another option:

<?php
$feedback = "refatju";
$domain = "yahoo.com";
$feedback .= $domain;
echo $feedback;
?>

<?php
$a=8;
$a.=5;
echo $a;
?>

<?php
$a = 'a' ;
$b = 'b';
$a .= $b .= "foo";
echo $a,"\n",$b;
?>
