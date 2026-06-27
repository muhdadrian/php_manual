<?php

// Typically, the result of an operator which returns a bool value is passed on to a control structure.


$action = "show_version";
$show_separators = true;

// == is an operator which tests equality and returns a boolean
if ($action == "show_version") {
    echo "The version is 1.23";
}

// this is not necessary...
if ($show_separators == TRUE) {
    echo "<hr>\n";
}

// ...because this can be used with exactly the same meaning:
if ($show_separators) {
    echo "<hr>\n";
}
?>
