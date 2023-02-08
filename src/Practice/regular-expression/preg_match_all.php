<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/5/14
 * Time: 11:47 AM
 */
$html = <<<PARA
<p>Bangladesh is a country of natural beauty</p>
<p>Please share webcoachbd inn your facebook n twitter</P>
PARA;
if (preg_match_all('@<p>@', $html, $all_match)>1){
    echo "there are more than one p tag";
}else{
    echo "less than";
}