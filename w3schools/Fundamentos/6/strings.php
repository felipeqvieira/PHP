<?php

// Double quoted strings perform action on special characters.

$oldtxt = "Hello World!";

$newtxt = str_replace("World", "Dolly", $oldtxt);

echo $newtxt . "\n\n";

$x = "John";

echo "Hello $x\n\n";

// Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:

echo 'Hello $x' . "\n\n";

// The PHP strlen() function returns the length of a string.

echo strlen("Hello world!\n\n");

//The PHP str_word_count() function counts the number of words in a string.

echo str_word_count("Hello World!\n\n");

//The PHP strpos() function searches for a specific text within a string (case-insensitive).

echo strpos("Hello world!\n\n", "world");

// The PHP str_replace() function replaces some characters with some other characters in a string.

$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

echo "\n\n";

//The strtolower() function returns the string in lower case:

$x = "Hello World!";
echo strtolower($x);

// The strtoupper() function returns the string in upper case

echo "\n\n";

$x = "Hello World!";
echo strtoupper($x);

// The PHP strrev() function reverses a string.

echo "\n\n";

$x = "Hello World!";
echo strrev($x);

// The trim() removes any whitespace from the beginning or the end

$x = " Hello World! ";
echo trim($x);

echo "\n\n";

// he PHP explode() function splits a string into an array. The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.

$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

echo "\n\n";

/*
Result:
Array ( [0] => Hello [1] => World! )
*/

// To concatenate, or combine, two strings you can use the . operator:

$x = "Hello";
$y = "World";
$z = $x . $y . "\n\n";
echo $z;

$x = "Hello";
$y = "World";
$z = $x . " " . $y . "\n\n";
echo $z;

// An easier and better way is by using the power of double quotes.

$x = "Hello";
$y = "World";
$z = "$x $y\n\n";
echo $z;

// You can return a range of characters by using the substr() function.

$x = "Hello World!\n\n";
echo substr($x, 6, 5);

echo "\n\n";

// By leaving out the length parameter, the range will go to the end:

$x = "Hello World!";
echo substr($x, 6);

//Use negative indexes to start the slice from the end of the string:

$x = "Hello World!";
echo substr($x, -5, 3);

// Use negative length to specify how many characters to omit, starting from the end of the string:

$x = "Hi, how are you?";
echo substr($x, 5, -3);

// To insert characters that are illegal in a string, use an escape character. An escape character is a backslash \ followed by the character you want to insert.

$x = "We are the so-called \"Vikings\" from the north.";

// \t	Tab