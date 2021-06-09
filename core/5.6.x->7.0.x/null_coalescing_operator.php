<?php
// Fetches the value of $_GET['user'] and returns 'nobody' if it does not exist.
$username = $_GET['user'] ?? 'nobody';

//equivalent to
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
echo '<pre>' . var_export($username, true) . '</pre>';

// Coalescing can be chained: this will return the first
// defined value out of $_GET['user'], $_POST['user'], and
// 'nobody'.
$username = $_GET['user'] ?? $_POST['user'] ?? 'nobody';
echo '<pre>' . var_export($username, true) . '</pre>';

