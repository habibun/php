<?php

function userInfo(string $name, string $email = '', int $age=5)
{
    return [
        'name' => $name,
        'email' => $email,
        'age' => $age
    ];
}

$result = userInfo(name: 'jony',  age: 20);

echo '<pre>';
var_dump($result);
echo '</pre>';
