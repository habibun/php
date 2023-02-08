<?php
/**
 * Created by Habibun Noby
 * Date: 5/16/14
 * Time: 5:57 PM
 * File Name: fwrite.php
 */
//to write into a file
$myFile = "../used-files/testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Bobby Bopper\n";
fwrite($fh, $stringData);
$stringData = "Tracy Tanner\n";
fwrite($fh, $stringData);
fclose($fh);
?>