<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/14/16
 * Time: 1:42 PM
 */

echo "Are you sure you want to do this?  Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'yes'){
    echo "ABORTING!\n";
    exit;
}
fclose($handle);
echo "\n";
echo "Thank you, continuing...\n";
