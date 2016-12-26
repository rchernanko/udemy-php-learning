<?php

class Car
{

    //Let's define some properties:

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    //Let's define some functions / methods

    function moveWheels()
    {
        $this->wheels = 10;
    }

    function createDoors() {
        $this->doors = 6;
    }

}

//Let's check if the class exists using a built in php function...pretty cool.
//TODO figure out how to use these OUTSIDE this file...

if (class_exists('Car')) {
    echo 'Car class exists' . '<br>';
} else {
    echo 'Class does not exist';
}

//Another built in function - checks whether a method exists in a given class
if (method_exists('Car', 'moveWheels')) {
    echo 'method exists' . '<br>';
} else {
    echo 'it does not';
}

//Now let's create an instance and call its properties and functions...

$testCar = new Car();

echo $testCar->wheels . '<br>';
echo $testCar->doors . '<br>';
echo $testCar->engine . '<br>';
echo $testCar->hood . '<br>';

$testCar->moveWheels();
echo $testCar->wheels . '<br>';

//Prior to me learning about encapsulation, I can change the values of the properties like this...
$testCar->wheels = 8;
echo $testCar->wheels . '<br>';


$anotherCar = new Car();
$anotherCar->createDoors();
echo $anotherCar->doors;

