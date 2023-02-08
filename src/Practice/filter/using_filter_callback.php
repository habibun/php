<?php
/**
 * Created by Habibun Noby
 * Date: 5/1/14
 * Time: 4:25 PM
 * File Name: using_filter_callback.php
 */
function convertSpace($string)
{
    return str_replace("_", " ", $string);
}
$string = "Peter_is_a_great_guy!";
echo filter_var($string, FILTER_CALLBACK, array("options"=>"convertSpace"));
//Note:It is possible to call a user defined function.txt and use it as a filter using the FILTER_CALLBACK filter. This way, we have full control of the data filtering.
?>