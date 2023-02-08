<?php
session_start();
?>
<html>
<head>
<title>Simple HTML Form</title>
</head>
<body>
<?php
$_SESSION['userName'] = 'JohnW';
$_SESSION['emailAddress'] = 'johnw@nospam.com';
$session_data = session_encode(); // Get the session data
$filehandle = fopen ('session_data.txt', 'w+'); // open a file write session data
fwrite ($filehandle, $session_data); // write the session data to file
fclose ($filehandle);
?>
</body>
</html>