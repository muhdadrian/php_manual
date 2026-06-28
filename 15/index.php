<?php

// Integer division

// There is no int division operator in PHP, to achieve this use the intdiv() function. 1/2 yields the float 0.5. The value can be cast to an int to round it towards zero, or the round() function provides finer control over rounding.

// Example #3 Divisions
var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)
?>
