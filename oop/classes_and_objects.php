<?php

// Declare the class

class Car {

    // properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    // method that says hello
    public function hello()
    {
        return "beep";
    }
}


// Create an instance
$bmw = new Car ();
$mercedes = new Car ();

// Use the methotds to get a beep
echo $bmw -> hello();
echo "<br>";
echo $mercedes -> hello();

// Get the values
echo "<br>";
echo $bmw -> color; // beige
echo "<br>";
echo $mercedes -> color; // beige
echo "<br>";

// Set the values
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//Get the values again
echo $bmw -> color; // blue
echo "<br>";
echo $mercedes -> color; // beige
echo "<br>";
echo $mercedes -> comp; // Mercedes Benz
echo "<br>";