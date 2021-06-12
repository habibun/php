<?php
/**
 * New object type
 *
 * A new type, object, has been introduced that can be used for (contravariant) parameter typing and (covariant) return typing of any objects.
 */

function test(object $obj) : object
{
    return new SplQueue();
}

$res = test(new StdClass());

echo '<pre>' . var_export($res, true) . '</pre>';
