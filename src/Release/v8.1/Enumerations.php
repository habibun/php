<?php

namespace Php\Migration\Php80To81;

enum Status: int
{
    case DRAFT = 1;
    case APPROVED = 2 ;
    case CANCELLED = 3;
}

echo Status::DRAFT->name;
echo "</br>";
echo Status::DRAFT->value;
echo "</br>";
var_dump(Status::cases());
echo "</br>";
exit('exit');
