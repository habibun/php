<?php
//it is used to remove php and html tags into string

$text = '<p>Test paragraph.</p><! --  Comment --> <a href="#fragment">Other strings</a>';
echo strip_tags($text);
// Test paragraph. Other strings
// Allow <p> and <a>
echo strip_tags($text, '<p><a>' );
// <p>Test paragraph.</p> <a href="#fragment">Other strings</a>
?>