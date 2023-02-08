<?php
/**
 * Date: 6/13/16
 * Time: 10:47 AM
 */
/**
 * Join array elements with a string
 */
$arr = array('lastName', 'firstName', 'age');
$arrNew = implode(',', $arr);
echo $arrNew;