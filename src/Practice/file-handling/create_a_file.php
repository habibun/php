<?php
/**
 * Created by Habibun Noby
 * Date: 5/13/14
 * Time: 11:09 PM
 * File Name: create_a_file.php
 */
$ourFileName= "testFile.txt";
$ourFileName = fopen($ourFileName,'w') or die("can't open file");
fclose($ourFileName);
?>


