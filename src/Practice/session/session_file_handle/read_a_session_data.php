<?php
session_start();
?>
<html>
<head>
</head>
<body>
<?php
$filehandle=fopen('session_data.txt','r+');
$sessiondata=fread($filehandle,4096);
fclose($filehandle);
session_decode($sessiondata);
print_r($sessiondata);
?>
</body>
</html>