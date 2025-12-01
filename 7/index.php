<!-- Introduction -->

<!-- Every single expression in PHP has one of the following built-in types depending on its value: -->
<?php
/* 
null
bool
int
float (floating-point number)
string
array
object
callable
resource
*/

/*
PHP is a dynamically typed language, which means that by default there is no need to specify the type of a variable, as this will be determined at runtime. However, it is possible to statically type some aspect of the language via the use of type declarations.

Types restrict the kind of operations that can be performed on them. However, if an expression/variable is used in an operation which its type does not support, PHP will attempt to type juggle the value into a type that supports the operation. This process depends on the context in which the value is used. 

Note: It is possible to force an expression to be evaluated to a certain type by using a type cast. A variable can also be type cast in-place by using the settype() function on it.
*/

/*
To check the value and type of an expression, use the var_dump() function. To retrieve the type of an expression, use the get_debug_type() function. However, to check if an expression is of a certain type use the is_type functions instead.
*/

$a_bool = true;   // a bool
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an int

echo get_debug_type($a_bool), "<br>\n";
echo get_debug_type($a_str), "<br>\n";

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}
var_dump($an_int);

// If $a_bool is a string, print it out
if (is_string($a_bool)) {
    echo "String: $a_bool";
}

// Note: Prior to PHP 8.0.0, where the get_debug_type() is not available, the gettype() function can be used instead. However, it doesn't use the canonical type names.