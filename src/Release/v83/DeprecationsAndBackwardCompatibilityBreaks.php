<?php

namespace Php\Release\v83;

/** Deprecations and backward compatibility breaks */
/*


More Appropriate Date/Time Exceptions.
Assigning a negative index n to an empty array will now make sure that the next index is n + 1 instead of 0.
Changes to the range() function.
Changes in re-declaration of static properties in traits.
The U_MULTIPLE_DECIMAL_SEPERATORS constant is deprecated in favor of U_MULTIPLE_DECIMAL_SEPARATORS.
The MT_RAND_PHP Mt19937 variant is deprecated.
ReflectionClass::getStaticProperties() is no longer nullable.
INI settings assert.active, assert.bail, assert.callback, assert.exception, and assert.warning have been deprecated.
Calling get_class() and get_parent_class() without arguments are deprecated.
SQLite3: Default error mode set to exceptions.


*/
