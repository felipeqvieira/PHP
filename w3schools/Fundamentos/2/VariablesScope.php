<?php

$x = 5; // global scope

function myTest(){

  $x = 10; // local scope
  echo "Variable x inside function is: $x\n\n";

}

myTest();

echo "Variable x outside function is: $x\n";

$w = 5;
$z = 10;

function myTest2(){

  //The global keyword is used to access a global variable from within a function.

  global $w, $z;
  $w = $w + $z;

}

myTest2();
echo "\n" . $w . "\n";

$A = 1;
$B = 2;
$C = 3;

function myTest3(){

  $GLOBALS['A'] = $GLOBALS['B'] + $GLOBALS['C'];
}

myTest3();

echo "\n" . $A . "\n";

// Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

// To do this, use the static keyword when you first declare the variable:

function myTest4(){

  static $D = 0;
  echo "\n" . $D . "\n";
  $D++;
}

myTest4();
myTest4();
myTest4();