<?php

// Converting to boolean

// To explicitly convert a value to bool, use the (bool) cast. Generally this is not necessary because when a value is used in a logical context it will be automatically interpreted as a value of type bool.

// When converting to bool, the following values are considered false:

// the boolean false itself
// the integer 0 (zero)
// the floats 0.0 and -0.0 (zero)
// the empty string "", and the string "0"
// an array with zero elements
// the unit type NULL (including unset variables)
// Internal objects that overload their casting behaviour to bool. For example, GMP objects representing the value 0.
// Every other value is considered true (including resource and NAN).

// Warning
// -1 is considered true, like any other non-zero (whether negative or positive) number!

// Example #1 Casting to Boolean
var_dump((bool) "");        // bool(false)
echo '<br>';
var_dump((bool) "0");       // bool(false)
echo '<br>';
var_dump((bool) 1);         // bool(true)
echo '<br>';
var_dump((bool) -2);        // bool(true)
echo '<br>';
var_dump((bool) "foo");     // bool(true)
echo '<br>';
var_dump((bool) 2.3e5);     // bool(true)
echo '<br>';
var_dump((bool) array(12)); // bool(true)
echo '<br>';
var_dump((bool) array());   // bool(false)
echo '<br>';
var_dump((bool) "false");   // bool(true)
?>
