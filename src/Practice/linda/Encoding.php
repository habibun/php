<html>
<head>
    <title>Encoding</title>
</head>
<body>
<?php
/* For clarity, I'm defining each part of a link at the top
then showing how to "clean" them using three different functions so
that they are suitable for use on a web page.
*/
$url_page = 'php/created/page/url.php' ; // <- page the link will request
$param1 = 'this is a string' ; // <- parameter to be sent in the URL string
$param2 = '"bad"/<>character$' ; // <- another parameter, with HTML unfriendly characters
$linktext = "<Click> & you'll see" ; // <- strings of the link, with HTML unfriendly characters
?>
<?php
// this gives you a clean link to use
$url = "http://localhost/" ;
$url .= rawurlencode ($url_page);
$url .= "?param1=" . urlencode($param1);
$url .= "&param2=" . urlencode($param2);
// htmlspecialchars escapes any html that
// might do bad things to your html page
?>
<a href="<?php echo htmlspecialchars ($url); ?>">
    <?php echo htmlspecialchars ($linktext); ?>
</a>
<?php
/*
Summary:
- Use rawurlencode for parts that come before "?".
- Use urlencode for all GET parameters (values that come after each "="). (POST
parameters are automatically encoded)
- Use htmlspecialchars for HTML tag parameters and HTML strings content.
*/
?>
</body>
</html>