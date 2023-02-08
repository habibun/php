<?php
//the strpos function.txt is used to search for character within a string
$numberedString = "1234567890"; // 10 numbers from 1 to 0
$fivePos = strpos($numberedString, "5");
echo "The position of 5 in our string was $fivePos";
?>

<?php
$numberedString = "1234567890123456789012345678901234567890";
$fivePos = strpos($numberedString, "5");
echo "The position of 5 in our string was $fivePos";
$fivePos2 = strpos($numberedString, "5", $fivePos + 1);
echo "<br />The position of the second 5 was $fivePos2";
?>

<?php
$numberedString = "1234567890123456789012345678901234567890";
$offset = 0; // initial offset is 0
$fiveCounter = 0;
while($offset = strpos($numberedString, "5", $offset + 1)){
    $fiveCounter++;
    echo "<br />Five #$fiveCounter is at position - $offset";
}
?>