<?php

/*      Arrays      */

$myArr = array("Volvo", 15);

foreach ($myArr as $x)
  echo $x . "\n\n";

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars) . "\n\n";

var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x \n\n";
}

// array_push() function to add a new item
array_push($cars, "Ford");
var_dump($cars);

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);

echo "\n" . $car["model"] . "\n\n";

foreach ($car as $x => $y) {
  echo "$x: $y \n";
}

/*

jeitos de se criar vetores:

$cars = array("Volvo", "BMW", "Toyota");

$cars = ["Volvo", "BMW", "Toyota"];

$cars = [
  "Volvo",
  "BMW",
  "Toyota"
];

$cars = [
  0 => "Volvo",
  1 => "BMW",
  2 =>"Toyota"
];

$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];

$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

*/

function myFunction() {
  echo "I come from a function!";
}

$myArr2 = array("Volvo", 15, 'myFunction');

$myArr2[2]();

$myArr = array("car" => "Volvo", "age" => 15, "message" => 'myFunction');

$myArr["message"]();

/* 

add itens 

$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";

$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];

*/

/*

remove itens

With the array_splice() function you specify the index (where to start) and how many items you want to delete.

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);


You can also use the unset() function to delete existing array items.

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);


$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);


You can also use the array_diff() function to remove items from an associative array.

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);


The array_pop() function removes the last item of an array.

$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);


The array_shift() function removes the first item of an array.

$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);

*/

?>