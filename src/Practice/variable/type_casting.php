<?php
$int = (int) "123abc";
echo $int;
?>


<?php
$a = "9bangla";
$b = true;
$c = (int) $a;
echo $c;
echo "<br />";
echo gettype($c);
echo "<br />"; 
$d = (int) $b;
echo $d;
echo "<br />";
echo gettype($d);
?>

<?php
//the function.txt automatically change to valid
$string1 = "11";
$string2 = "2nd Dec";
$string3 = "Dec 2nd";
echo $string1*2 . "\n"; //output = 22
echo $string1+2 . "\n"; //output = 13
echo $string1-2 . "\n"; //output = 9
echo $string1/2 . "\n"; //output = 5.5
echo $string2*2 . "\n"; //output = 4 //because it query the valid number
echo $string2+2 . "\n"; //output = 4
echo $string2-2 . "\n"; //output = 0
echo $string2/2 . "\n"; //output = 1
echo $string3*2 . "\n"; //output = 0
echo $string3+2 . "\n"; //output = 2
echo $string3-2 . "\n"; //output =-2
echo $string3/2 . "\n"; //output = 0//first character is alphabet so it is count as 0 (see number 9)
?>