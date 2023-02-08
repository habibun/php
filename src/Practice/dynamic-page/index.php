<?php
if(!empty($_GET['id'])){
    $id = $_GET['id'];

    if ($id) {
        include('pages/'.$id.'php');
    }
    else{
        include('pages/home.php');
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>dynamic page</title>
    <style type="text/css">
    #menu{
    list-style-type: none;
            margin-left: 0;
            position: absolute;
            left: 0;
        }
        #menu a{
            text-decoration: none;
            line-height: 48px;
        }
        p{
            position: absolute; top: 150px; left: 150px;
        }
    </style>
</head>
<body>

<ul id="menu">
    <li><a href="index.php?id=home">Home</a> </li>
    <li><a href="pages/profile.php?id=profile">Profile</a> </li>
    <li><a href="pages/setting.php?id=setting">Setting</a> </li>
</ul>

</body>
</html>
