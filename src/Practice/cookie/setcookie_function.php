<!--the setcookie function is used to set a cookie.
note: the setcookie function must appear before the html tag

in the example below we will create a cookie named "user" and assign the value
"Alex Porter" to it .We also specify that the cookie should expire after one hour
-->
<?php
setcookie('user',"Alex Porter",time()+3600);
?>

<html>
<head>
    <title>cookie example</title>
</head>
<body>

</body>
</html>