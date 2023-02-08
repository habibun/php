<?php
//the PHP_COOKIE variables is used to retrieve a cookie value.
//in the example below,we retrieve the value of the cookie named "user" and display it on a page:

//print a cookie
echo $_COOKIE["user"];
//a way to view all cookie
print_r($_COOKIE);
?>

//in the following example we use the isset() function to find out if a cookie has been set:

<?php
if(isset($_COOKIE["user"]))
echo "Welcome " . $_COOKIE["user"]. "!<br />";
else
echo "Welcome quest!<br />";
?>

