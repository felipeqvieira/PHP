<?php

/*          Constants         */

/* 
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name)

Note: Unlike variables, constants are automatically global across the entire script.

To create a constant, use the define() function.

  define(name, value, case-insensitive);

  Parameters:
    name: Specifies the name of the constant
    value: Specifies the value of the constant
    case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false. 
    
    Note: Defining case-insensitive constants was deprecated in PHP 7.3. PHP 8.0 accepts only false, the value true will produce a warning.

*/

//Create a constant with a case-sensitive name:

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

//Create a constant with a case-insensitive name:

define("GREETING2", "Welcome to W3Schools.com!", true);
echo greeting2;

// You can also create a constant by using the const keyword.

const MYCAR = "Volvo";
echo MYCAR;

/*
const vs. define()
  - const are always case-sensitive
  - define() has has a case-insensitive option.
  - const cannot be created inside another block scope, like inside a function or inside an if statement.
  - define can be created inside another block scope.
*/

// From PHP7, you can create an Array constant using the define() function.

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

/*          Predefined Constants        */

/* 

__CLASS__	
If used inside a class, the class name is returned.

__DIR__	
The directory of the file.

__FILE__	
The file name including the full path.	

__FUNCTION__	
If inside a function, the function name is returned.

__LINE__	
The current line number.

__METHOD__	
If used inside a function that belongs to a class, both class and function name is returned.

__NAMESPACE__	
If used inside a namespace, the name of the namespace is returned.

__TRAIT__	
If used inside a trait, the trait name is returned.	

ClassName::class	
Returns the name of the specified class and the name of the namespace, if any.

*/

/*

Note:

The magic constants are case-insensitive, meaning __LINE__ returns the same as __line__.

*/

