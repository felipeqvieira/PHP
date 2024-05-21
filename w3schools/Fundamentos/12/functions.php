<?php

/*      Functions     */

/*

A function is a block of statements that can be used repeatedly in a program.

A function will not execute automatically when a page loads.

A function will be executed by a call to the function

*/

function myMessage() {
  echo "Hello world!";
}

function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

// Use a pass-by-reference argument to update a variable
function add_five(&$value) {
  $value += 5;
}

function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$num = 2;
add_five($num);
echo $num;

myMessage();

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;

?>