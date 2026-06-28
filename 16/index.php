<?php

// Converting to integer

//To explicitly convert a value to int, use the (int) cast. However, in most cases the cast is not needed, since a value will be automatically converted if an operator, function or control structure requires an int argument. A value can also be converted to int with the intval() function.

// If a resource is converted to an int, then the result will be the unique resource number assigned to the resource by PHP at runtime.

/*
From booleans

false will yield 0 (zero), and true will yield 1 (one).
*/

/*
From floating point numbers

When converting from float to int, the number will be rounded towards zero. As of PHP 8.1.0, a deprecation notice is emitted when implicitly converting a non-integral float to int which loses precision.
*/

// Example #4 Casting from Float
function foo($value): int {
  return $value;
}

var_dump(foo(8.1)); // "Deprecated: Implicit conversion from float 8.1 to int loses precision" as of PHP 8.1.0
var_dump(foo(8.1)); // 8 prior to PHP 8.1.0
var_dump(foo(8.0)); // 8 in both cases

var_dump((int) 8.1); // 8 in both cases
var_dump(intval(8.1)); // 8 in both cases

// If the float is beyond the boundaries of int (usually +/- 2.15e+9 = 2^31 on 32-bit platforms and +/- 9.22e+18 = 2^63 on 64-bit platforms), the result is undefined, since the float doesn't have enough precision to give an exact int result. No warning, not even a notice will be issued when this happens!

// Note:
// NaN, Inf and -Inf will always be zero when cast to int.

// Warning:
// Never cast an unknown fraction to int, as this can sometimes lead to unexpected results.
echo (int) ( (0.1+0.7) * 10 ); // echoes 7!

/*
From strings

If the string is numeric or leading numeric then it will resolve to the corresponding integer value, otherwise it is converted to zero (0).
*/

/*
From NULL

null is always converted to zero (0).
*/

/*
From other types

Caution: The behaviour of converting to int is undefined for other types. Do not rely on any observed behaviour, as it can change without notice.
*/
?>
