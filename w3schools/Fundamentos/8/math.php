<?php

/*          Functions         */

// The pi() function returns the value of PI:

  echo(pi());

// The min() and max() functions can be used to find the lowest or highest value in a list of arguments:

  echo(min(0, 150, 30, 20, -8, -200));
  echo(max(0, 150, 30, 20, -8, -200));

// The abs() function returns the absolute (positive) value of a number:

  echo(abs(-6.7));  

// The sqrt() function returns the square root of a number:

  echo(sqrt(64));

// The round() function rounds a floating-point number to its nearest integer:

  echo(round(0.60));
  echo(round(0.49));

// The rand() function generates a random number:

  echo(rand());

// To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.

echo(rand(10, 100));