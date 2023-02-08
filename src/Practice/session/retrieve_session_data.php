<html>
<head>
    <title>retrieve session</title>
</head>
<body>
<?php

$_SESSION['views']=1;
//retrieve session date
echo "Pageviews=". $_SESSION['views'];
?>
</body>
</html>