<?php

class Person
{
    var $name = 'richard' . '<br>';

    //Let's make a constructor...

    function __construct()
    {
        echo $this->name;
    }

}

$person = new Person();
$person1 = new Person();