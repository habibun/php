<?php
//this is use to remove space before or after a string
$str1 = "\t\tThese are a few words :) ...  ";
echo trim($str1);
// "These are a few words :) ..."
$str2 = "\x09Example string\x0A";
echo trim($str2);
// "Example string"
$str3 = "Hello World";
echo trim($str3);
// "Hello World"
?>

<?php
//some space
/*
" "          (ASCII 32 (0x20)), an ordinary space.
"\t"        (ASCII 9  (0x09)), a tab.
"\n"      (ASCII 10 (0x0A)), a new line (line feed).
"\r"       (ASCII 13 (0x0D)), a carriage return.
"\0"        (ASCII 0   (0x00)), the NULL-byte.
"\x0B"    (ASCII 11 (0x0B)), a vertical tab.
*/

?>

<?php
//charlist parameter define what to be removed
$str1 = "php is a widely-used Open Source general-purpose scripting language";
echo trim($str1, "aeguph")."\n";
// " is a widely-used Open Source general-purpose scripting lan"
$str1 = "php is a widely-used Open Source general-purpose scripting language";
echo trim($str1, "aeguph ")."\n";
// "is a widely-used Open Source general-purpose scripting lan"
$str1 = "php is a widely-used Open Source general-purpose scripting language";
echo trim($str1, "a..z")."\n";
// " is a widely-used Open Source general-purpose scripting"
$str1 = "php is a widely-used Open Source general-purpose scripting language";
echo trim($str1, "a..z ")."\n";
// "-used Open Source general-"
?>


