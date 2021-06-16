<?php
/**
 * yield keyword
 *
 *The heart of a generator function is the yield keyword.
 * In its simplest form, a yield statement looks much like a return statement, except that instead of
 * stopping execution of the function and returning, yield instead provides a value to the code looping over
 * the generator and pauses execution of the generator function.
 */

function myGeneratorFunction()
{
    yield;
}

$returnValue = myGeneratorFunction();
var_dump($returnValue);
echo get_class($returnValue),"\n";
