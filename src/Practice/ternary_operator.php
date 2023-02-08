<?php
/* start with if / else ... */

$language = "php";

if ($language == 'php') {
	$dynamic = true;
} else {
	$dynamic = false;
}

/* ... then convert */
$dynamic = ($language == 'php' ? true : false); //or 1 : 0

//the following isn't as fun to read
$age = 25;
$age_code = $age > 10 ? $age > 20 ? $age > 30 ? 'senior' : 'adult':'teen':'youngster';

/* echo, inline */
$score = 15;
echo 'Based on your score, you are a ', ($score > 10 ? 'genius' : 'nobody'); //harsh!

/* a bit tougher */
$score = 10;
$age = 20;
echo 'Taking into account your age and score, you are: ', ($age > 10 ? ($score < 80 ? 'behind' : 'above average'):($score < 50 ? 'behind' : 'above average')); // returns 'You are behind'
