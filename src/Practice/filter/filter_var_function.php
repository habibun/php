<?php
/**
 * Created by Habibun Noby
 * Date: 5/1/14
 * Time: 3:23 PM
 * File Name: filter_var_function.php
 */
//in the example below we validate_input an integer using the filter_var() function.txt:
$int = 123;
if (!filter_var($int, FILTER_VALIDATE_INT)) {
    echo "integer is not valid";
}
else {
    echo "integer is valid";
}
