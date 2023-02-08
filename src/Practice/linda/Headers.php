<?php
// This is how you redirect a page (aka "302 redirect")
header("Location: basic.html" );
exit;
// Always use exit to keep anything else from the page from executing
/* header() must come before any whitespace or
HTML is output to the browser unless output
buffering is turned on.
Only 1 header can be sent; if HTML has been sent, then the header already
went too.
*/
?>
<?php
// This is how you return a 404 error (or another response code)
// header("HTTP/1.0 404 Not Found");
// exit;
?>

