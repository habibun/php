<?php
//delimiters may be slash ,dot, or hyphen
$date="04/30/1973";
list($month,$day,$year) = split('[/]',$date);
echo "Month:$month;Day:$day;Year;$year<br/>\n";
?>