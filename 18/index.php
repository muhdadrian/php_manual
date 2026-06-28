<?php

// Converting to float

/*
From strings

If the string is numeric or leading numeric then it will resolve to the corresponding float value, otherwise it is converted to zero (0).
*/

/*
From other types

For values of other types, the conversion is performed by converting the value to int first and then to float. See Converting to integer for more information.

Note: As certain types have undefined behavior when converting to int, this is also the case when converting to float.
*/

/*
Comparing floats

As noted in the warning above, testing floating point values for equality is problematic, due to the way that they are represented internally. However, there are ways to make comparisons of floating point values that work around these limitations.

To test floating point values for equality, an upper bound on the relative error due to rounding is used. This value is known as the machine epsilon, or unit roundoff, and is the smallest acceptable difference in calculations.

$a and $b are equal to 5 digits of precision.
*/

// Example #1 Comparing Floats
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if (abs($a - $b) < $epsilon) {
    echo "true";
}

/*
NaN

Some numeric operations can result in a value represented by the constant NAN. This result represents an undefined or unrepresentable value in floating-point calculations. Any loose or strict comparisons of this value against any other value, including itself, but except true, will have a result of false.

Because NAN represents any number of different values, NAN should not be compared to other values, including itself, and instead should be checked for using is_nan().
*/
?>
