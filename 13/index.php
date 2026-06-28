<?php

// Integers
// An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}.

/*
Syntax

Ints can be specified in decimal (base 10), hexadecimal (base 16), octal (base 8) or binary (base 2) notation. The negation operator can be used to denote a negative int.

To use octal notation, precede the number with a 0 (zero). As of PHP 8.1.0, octal notation can also be preceded with 0o or 0O. To use hexadecimal notation precede the number with 0x. To use binary notation precede the number with 0b.

As of PHP 7.4.0, integer literals may contain underscores (_) between digits, for better readability of literals. These underscores are removed by PHP's scanner.
*/

// Example #1 Integer literals

$a = 1234; // decimal number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0o123; // octal number (as of PHP 8.1.0)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)
$a = 1_234_567; // decimal number (as of PHP 7.4.0)

/*
Formally, the structure for int literals is as of PHP 8.1.0 (previously, the 0o or 0O octal prefixes were not allowed, and prior to PHP 7.4.0 the underscores were not allowed):

decimal     : [1-9][0-9]*(_[0-9]+)*
            | 0

hexadecimal : 0[xX][0-9a-fA-F]+(_[0-9a-fA-F]+)*

octal       : 0[oO]?[0-7]+(_[0-7]+)*

binary      : 0[bB][01]+(_[01]+)*

integer     : decimal
            | hexadecimal
            | octal
            | binary
*/

// The size of an int is platform-dependent, although a maximum value of about two billion is the usual value (that's 32 bits signed). 64-bit platforms usually have a maximum value of about 9E18. PHP does not support unsigned ints. int size can be determined using the constant PHP_INT_SIZE, maximum value using the constant PHP_INT_MAX, and minimum value using the constant PHP_INT_MIN.
?>
