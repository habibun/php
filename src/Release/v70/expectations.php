<?php

namespace Php\Migration\Php56To70;


ini_set('assert.exception', 1);

class CustomError extends \AssertionError {}

assert(false, new CustomError('Some error message'));
