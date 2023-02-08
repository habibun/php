<?php
/**
 * Created by Habibun Noby
 * Date: 5/16/14
 * Time: 10:25 PM
 * File Name: unlink.php
 */
$myFile = "testFile.txt";
$delete = unlink($myFile);
if (!$delete) {
    echo "could not found the file";
}
else {
    echo "file deleted successfully";
}

?>