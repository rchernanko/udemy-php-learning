<?php

class Car1
{

    //Access modifiers

    public $wheels = 4; //everywhere
    protected $hood = 1; //this class and any subclasses
    private $engine = 1; //this class only

    function showProperty()
    {
        echo 'showing property ' . $this->engine;
    }
}

$bmw = new Car1();

echo $bmw->wheels . '<br>'; //fine to access

/*

echo $bmw->hood; //CANNOT access as access modifier is protected and I am outside the Car1 class
echo $bmw->engine; //Same as above, but modifier is private

 */

echo $bmw->showProperty();