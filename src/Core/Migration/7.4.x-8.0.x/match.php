<?php


function handleGet()
{
    echo "handling get request";
}

function handlePostOrPatch()
{
    echo "handling post or patch request";
}

$requestMethod = 'get';
$status = match ($requestMethod) {
    'get' => handleGet(),
    'post', 'patch' => handlePostOrPatch(),
    default => 'unknown status code',
};

$status($requestMethod);
