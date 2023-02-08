<?php
// This file is being included by includes.php
function hello($name) {
    echo "Hello {$name}!";
}
/* Note: Even though the request to include this file was inside
php-tags, the file needs to have php-tags around any PHP.
PHP always assumes HTML unless told differently by those tags.
*/
?>