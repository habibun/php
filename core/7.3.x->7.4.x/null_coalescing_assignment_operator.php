<?php
$array = [];
$array['key'] ??= computeDefault();
// is roughly equivalent to
if (!isset($array['key'])) {
    $array['key'] = computeDefault();
}

function computeDefault()
{
    return 'default';
}


echo '<pre>' . var_export($array, true) . '</pre>';