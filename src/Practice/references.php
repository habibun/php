<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 7/2/16
 * Time: 1:43 PM
 */

//The & operator in PHP, means pass reference. Here is a example:
$b=2;
$a=$b;
$a=3;
print $a;
print $b;
// output is 32

$b=2;
$a=&$b; // note the & operator
$a=3;
print $a;
print $b;
// output is 33

/*
 * In the above code, because we used & operator, a reference to where $b is pointing is stored in $a. So $a is actually a reference to $b.
 */