<?php
//substr function.txt is use to divide string
//if  value is positive then start left to right and count start to 0
//if  value is negative then start right to left and count start to -1

echo substr("abcdefgh", 1, 4);   // return "bcde"
echo substr("abcdefgh", -4, 2);   // return "ef"
echo substr("abcdefgh", 2, -3);   // return "cde"
echo substr("abcdefgh", 4, -4);   // return ""



echo substr("abcdefgh", 0);      // return "abcdefgh"
echo "<br/>";
echo substr("abcdefgh", 0, 2);    // return "ab"
echo "<br/>";
echo substr("abcdefgh", 5, 3);    // return "fgh"
echo "<br/>";
echo substr("abcdefgh", -1);     // return "h"
echo "<br/>";
echo substr("abcdefgh", -4);     // return "efgh"
echo "<br/>";
echo substr("abcdefgh", -3, 2);  // return "fg"
echo "<br/>";
echo substr("abcdefgh", 8);      // return ""
?>


