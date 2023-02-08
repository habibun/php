<?php
/**
 * Created by Habibun Noby
 * Date: 4/29/14
 * Time: 9:37 PM
 * Year: 2014
 * File Name: die_function.php
 */
$file = fopen("used-files/welcome.txt","r");

//if the file doesn't exit you get this type of error:
//Warning: fopen(used-files/welcome.txt): failed to open stream: No such file or directory in F:\xampp\htdocs\my_library\error-handling\die_function.php on line 9
?>

<?php
//To avoid that the user gets an error message like the one above, we test if the file exist before we try to access it:
if(!file_exists("../welcome.txt"))
{
    die ("File not found");
}
else
{
    $file = fopen("../used-files/welcome.txt","r");
}

//Now if the file does not exist you get an error like this:(File not found)

//the code above is more efficient than the earlier code,because it uses a simple error handling mechanism to stop the script after the error.
//However, simply stopping the script is not always the right way to go
?>