<?php

namespace Php\Migration\Php82;

/**
 * Dynamic Properties Deprecated
 * One of the most notable deprecations in PHP 8.2 is that it deprecates class properties that are dynamically declared. There is an opt-out to it, but the recommended approach is to declare the class properties in the class declaration, preferably with a type declaration as well.
 */
class User {
    public int $uid;
}

$user = new User();
$user->name = 'Foo';


/**
 * utf8_encode and utf8_decode Functions Deprecated
 * PHP 8.2 finally deprecates the utf8_encode and utf8_decode functions that were unfortunately named without noting that they only encode/decode from Latin 1 (ISO-8859-1).
 *
 * Majority of the PHP applications that use these functions tend to not be aware of this shortcoming. The recommended replacements include the better functionality provided by mbstring, iconv, and intl extensions.
 */



/**
 * ${var} String Interpolation Deprecated
 * PHP has always supported string variable interpolation with "foo {$bar}" pattern, and along with an alternative syntax that the dollar sign is placed outside the curly braces (e.g. "foo ${bar}").
 *
 * In PHP 8.2, the alternative syntax of placing the dollar sign outside the curly braces is deprecated.
 *
 * Deprecated in PHP 8.2    Recommended syntax for PHP 8.2
 * Hello ${name};    Hello {$name}
 * echo "Hello ${$var}";    echo "Hello {$$var}";
 */

/**
 * Additionally, PHP 8.2 also deprecates some of the partially-supported callable patterns and Mbstring extension's handling of Base64, Uuencode, QPrint, and HTML Entity encodings.
 */