<?php
//A Simple String Searcher
$queryText = '/jo/';
$queryTo = 'my name is jony';
$query = preg_match($queryText,$queryTo);
//var_dump ($query);


//Anytime you want to search for one string or another, you put those two strings together surrounded by parentheses, separated by the pipe, as shown here:
$queryText2 = '/(Mr|Dr)\. Smith/';
$queryTo2 = 'Mr. Smith';
$check2 = preg_match($queryText2,$queryTo2);
//var_dump($check2);


//you really only want to search for those special keywords at the beginning of the query string
$queryText3 = '/^jony/';
//$queryTo3 = 'my name is jony.';
$queryTo3 = 'jony is my name.';
$check3 = preg_match($queryText3,$queryTo3);
//var_dump($check3);


//$ doesn’t allow for the trailing spaces
$queryText3 = '/^(Mr|Dr). Smith$/';
$queryTo3 = 'Dr. Smith';
$check3 = preg_match($queryText3,$queryTo3);
//var_dump($check3);


/*But, regular expressions are happy to be case-insensitive, meaning that they don’t
care whether they match uppercase or lowercase versions of a word. Just add an
“i” to the end of your expression, after the closing forward slash*/
$queryText4 = '/jony/i';
$queryTo4 = 'my name is jonY';
$check4 = preg_match($queryText4,$queryTo4);
//var_dump($check4);

/*But, that requires a space. How can you say that more than one space is okay? That’s
when you need + (plus) character. The + character says, “The thing that came just
before me can appear any number of times.”*/
$queryText5 = '/^ +(MR|DR). sMiTH$/i';
$queryTo5 = '  Dr. Smith';
$check5 = preg_match($queryText5, $queryTo5);
//var_dump($check5);


//for tab line break carriage return
$queryText6 = "/^[ \t\r\n]* jony/";
$queryTo6 = 'my name is jony';
$check6 = preg_match($queryText6, $queryTo6);
//var_dump($check6);

//In fact, this sort of whitespace matching is so common that regular expressions can use \s as an abbreviation
$queryText7 = "/^\s* jony/";
$queryTo7 = 'my name is jony';
$check7 = preg_match($queryText7, $queryTo7);
//var_dump($check7);
