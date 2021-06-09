<?php

session_start([
    'cache_limiter' => 'private',
    "read_and_close" => false
]);

$_SESSION['name'] = "Test";

echo $_SESSION['name'];