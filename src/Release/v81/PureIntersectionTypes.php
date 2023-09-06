<?php

namespace Php\Release\Php80To81;

use Countable;
use Iterator;

class PureIntersectionTypes
{
    function countAndIterate(Iterator&Countable $value) {
        foreach ($value as $val) {
            echo $val;
        }

        count($value);
    }
}
