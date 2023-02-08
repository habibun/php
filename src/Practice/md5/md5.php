<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 4/9/14
 * Time: 10:02 PM
 */
$password_md5='e19d5cd5af0378da05f63f891c7467af';

if (isset($_POST)) {
    $password = md5($_POST['password']);
    if(! empty($password)){
    if ($password === $password_md5) {
        echo "password correct you can log in";
    }
    else{
        echo "incorrect password";
    }
}
}
?>