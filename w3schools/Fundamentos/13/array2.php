<?php

/*    Sorting Arrays    */

// sort arrays in ascending order
$cars = array("Volvo", "BMW", "Toyota");
sort($cars); 

// sort arrays in descending order
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars); 

// sort associative arrays in ascending order, according to the value
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

// sort associative arrays in ascending order, according to the key
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age); 

// sort associative arrays in descending order, according to the value
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

// sort associative arrays in descending order, according to the key
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

?>