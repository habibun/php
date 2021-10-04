<?php

$subject ="asdfsbf gub";


$numOfMatches;
preg_replace_callback_array(
    [
        '[a]' => function($match) {echo $match[0]. ' match </br>';},
        '[b]' => function($match) {echo $match[0]. ' match ';}
    ],
    $subject,
    1,
    $numOfMatches

);

echo $numOfMatches;
