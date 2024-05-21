<?php

//When you assign a text value to a variable, put quotes around the value.

// Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.

// A variable name must start with a letter or the underscore character

// A variable name cannot start with a number

// A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )

// Variable names are case-sensitive ($age and $AGE are two different variables)

$txt = "W3Schools.com";
echo "I love $txt!\n";

echo "I love " . $txt . "!\n\n";

$x = 5;
$y = 4;

echo $x + $y . "\n\n";

//function returns the data type and the value
var_dump($x);
echo "\n";
var_dump(5);
echo "\n";
var_dump("John");
echo "\n";
var_dump(3.14);
echo "\n";
var_dump(true);
echo "\n";
var_dump([2, 3, 56]);
echo "\n";
var_dump(NULL);
echo "\n";

$x = "John";
echo $x . "\n\n";

$x = $y = $z = "Fruit";

?>