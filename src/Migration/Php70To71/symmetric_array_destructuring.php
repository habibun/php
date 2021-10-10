<?php

namespace Php\Migration\Php70To71;

/**
 * Symmetric array destructuring.
 *
 * The shorthand array syntax ([]) may now be used to destructure arrays for assignments (including within foreach),
 * as an alternative to the existing list() syntax, which is still supported.
 */
$data = [
    [1, 'Tom'],
    [2, 'Fred'],
];

// list() style
//list($id1, $name1) = $data[0];

// [] style
//[$id1, $name1] = $data[0];

// list() style
foreach ($data as list($id, $name));
//    var_dump($id, $name);

// [] style
foreach ($data as [$id, $name]) {
    var_dump($id, $name);
}
