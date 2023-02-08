<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>OOPHP in Webcoachbd</title>

<?php include("class_lib.php"); ?>

</head>

<body>

<?php 
/**
Created by:Rejoanul Alam webcoachbd.com

কোন সমস্যা হলে ওয়েবকোচবিডি ফোরামে প্রশ্ন করুন।

**/




//  পিএইচপি পেজে পিএইচপি অবজেক্ট ব্যবহার করা


$rejoan = new people("Rejoanul Alam");


echo "Rejoan's full name: " . $rejoan->get_name();

$riad = new employee("Anjirul Alam");

echo ">>Riad's full name " . $riad->get_name();

?>


</body>
</html>
