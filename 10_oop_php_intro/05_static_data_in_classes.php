<?php

class StaticClassExample
{

    //How to define a static variable...
    static $name = 'hello <br>';
    var $hood = 1;

    //To refer to a static variable within this class
    function helloStaticVariable()
    {
        echo StaticClassExample::$name;
    }

    //This differs to a normal variable i.e. the below:
    function helloNormalVariable()
    {
        echo $this->hood . '<br>';
    }
}

//How to call a static variable...
echo StaticClassExample::$name;

$example1 = new StaticClassExample();
$example1->helloStaticVariable();
$example1->helloNormalVariable();