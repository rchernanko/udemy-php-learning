<?php

//I am going to extend the Plane class from Car
//Similar to java

class Machine
{

    var $hasWheels = true;
    var $id = 14;

}

class Plane extends Machine
{

    var $hasWheels = false;

}

$plane = new Plane();

echo $plane->hasWheels; //actually prints out a '1' if true. But of course, I am overriding this in the child class
echo '<br>';
echo $plane->id;