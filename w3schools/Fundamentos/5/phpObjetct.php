<?php

//Classes and objects are the two main aspects of object-oriented programming.

// A class is a template for objects, and an object is an instance of a class.

// Class
class Car{

  //Let's assume we have a class named Car that can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.
  
  public $color;
  public $model;

  //If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
  
  public function __construct($color, $model){
    $this->color = $color;
    $this->model = $model;
  }

  public function message(){
    return "My car is a " . $this->color . " " . $this->model . "!\n\n";
  }

}

// Object
$myCar = new Car("red", "Volvo");
var_dump($myCar);

// When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.