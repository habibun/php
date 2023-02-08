<?php
//in foreach loop,$key is contain array element offset.
//in foreach loop,$value is contain element value.
$MyArray = array("blue"=>"berry","red"=>"tomato","green"=>"pear","yellow"=>"banana");
foreach($MyArray  as $key=>$value)
{
    echo "{$value} is {$key}<br>";
}