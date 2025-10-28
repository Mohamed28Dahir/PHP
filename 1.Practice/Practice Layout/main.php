<?php

// include ("library.php");
// include_once ("library.php");

require ("library.php");
require_once ("library.php");

if (function_exists("sum")) {
    echo "Yes it's Exists!";
}
else {
    echo "No!";
}

echo "<br>";

echo "Arithmetic Operations: <br>";

add(5, 7);

sub(9, 3);

mult(8, 4);

?>