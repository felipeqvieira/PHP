<?php

// The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. 

//Echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

echo "PHP is fun!\n\n";

echo  "Hello World\n\n";

echo "This ", "string", "was", "made", "with multiple parameters\n\n";

$txt1 = "Learn PHP";

$txt2 = "W3Schools.com";

echo $txt1 . "\n\n";

echo "Study PHP at " . $txt2 . "\n\n";

$x = 5;
$y = 4;

echo $x + $y . "\n\n";

print "PHP is Fun!\n\n";
print "Hello world!\n\n";
print "I'm about to learn PHP!\n\n";

print $txt1 . "\n\n";
print "Study PHP at " . $txt2 . "\n\n";
print $x + $y . "\n\n";

?>