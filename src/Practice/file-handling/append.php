<?php
/**
 * Created by Habibun Noby
 * Date: 5/16/14
 * Time: 10:45 PM
 * File Name: append.php
 */
$myFile = "../used-files/testFile.txt";
$fh = fopen($myFile, 'a') or die("Can't open file");
$stringData = "New Stuff 1\n";
fwrite($fh,$stringData);
$stringData = "New Stuff 2\n";
fwrite($fh,$stringData);
fclose($fh);
?>