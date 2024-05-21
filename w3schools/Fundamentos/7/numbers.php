<?php 

/*          Integers          */

// PHP has the following predefined constants for integers:

  // PHP_INT_MAX - The largest integer supported
  // PHP_INT_MIN - The smallest integer supported
  // PHP_INT_SIZE -  The size of an integer in bytes

// PHP has the following functions to check if the type of a variable is integer:

  // is_int()
  // is_integer() - alias of is_int()
  // is_long() - alias of is_int() 

$x = 5985;
var_dump(is_int($x));
  
$x = 59.85;
var_dump(is_int($x));

/*          Float          */

/* 
  PHP has the following predefined constants for floats (from PHP 7.2):

   PHP_FLOAT_MAX - The largest representable floating point number
   PHP_FLOAT_MIN - The smallest representable positive floating point number
   PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
   PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0

 PHP has the following functions to check if the type of a variable is float:

   is_float()
   is_double() - alias of is_float()
*/

  $x = 10.365;
  var_dump(is_float($x));


/*          Float          */

/* 
  A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

  PHP has the following functions to check if a numeric value is finite or infinite:

    is_finite()
    is_infinite()
  
*/

$x = 1.9e411;
var_dump($x);

/*          NaN          */

/*

  NaN stands for Not a Number. NaN is used for impossible mathematical operations.

  PHP has the following functions to check if a value is not a number:

    is_nan()
*/

$x = acos(8);
var_dump($x);

/*          Numerical Strings          */

/* The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise. */

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

/*          Numerical Strings          */

/*

The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

*/

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));



/*          Casting         */

/*

Sometimes you need to cast a numerical value into another data type.

The (int), (integer), and intval() functions are often used to convert a value to an integer.

*/

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

/* 
  Casting in PHP is done with these statements:

    (string) - Converts to data type String
    (int) - Converts to data type Integer
    (float) - Converts to data type Float
    (bool) - Converts to data type Boolean
    (array) - Converts to data type Array
    (object) - Converts to data type Object
    (unset) - Converts to data type NULL
*/

// To cast to integer, use the (int) statement:

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

//To cast to integer, use the (int) statement:

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

// To cast to float, use the (float) statement:

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

// To cast to boolean, use the (bool) statement:

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

// To cast to array, use the (array) statement:

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

/* 
When converting into arrays, most data types converts into an indexed array with one element. NULL values converts to an empty array object.

Objects converts into associative arrays where the property names becomes the keys and the property values becomes the values:
*/

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");

$myCar = (array) $myCar;
var_dump($myCar);

/* 
To cast to object, use the (object) statement:

When converting into objects, most data types converts into a object with one property, named "scalar", with the corresponding value.

NULL values converts to an empty object.
*/

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

/* 
Indexed arrays converts into objects with the index number as property name and the value as property value. 

Associative arrays converts into objects with the keys as property names and values as property values.
*/

$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

$a = (object) $a;
$b = (object) $b;