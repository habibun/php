<?php

namespace Php\Migration\Php80To81;

use Countable;
use Iterator;

class PureIntersectionTypes
{
    function count_and_iterate(Iterator&Countable $value) {
        foreach ($value as $val) {
            echo $val;
        }

        count($value);
    }


}
