<?php
/**
 * Iterables
 *
 * It accepts any array or object implementing the Traversable interface.
 * Both of these types are iterable using foreach and can be used with yield from within a generator
 */

function printIterable(iterable $myIterable)
{
    foreach ($myIterable as $item) {
        echo $item;
    }
}

$res = ["a", "b", "c"];
printIterable($res);

