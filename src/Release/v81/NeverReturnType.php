<?php

namespace Php\Release\Php80To81;

class NeverReturnType
{
    function redirect(string $uri): never {
        header('Location: ' . $uri);
        exit();
    }

    function redirectToLoginPage(): never {
        redirect('/login');
        echo 'Hello'; // <- dead code detected by static analysis
    }
}
