<?php
//when deleting a cookie you should assure that the expiration date is in the past.

//set the expiration date to one hour ago
setcookie("user","",time()-3600);
?>