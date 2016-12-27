<?php

class Person4
{

    const AVG_LIFE_SPAN = 79;

    public static $centuryBornIn = '20th';

    private $firstName;
    private $lastName;
    private $yearBorn;

    function __construct($firstName, $lastName, $yearBorn)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->yearBorn = $yearBorn;

        echo $this->firstName . ' ' . $this->lastName . ' ' . $this->yearBorn;
    }

    //use the keyword 'self' to access static variables from within the class
    public static function getCenturyBornIn()
    {
        return self::$centuryBornIn;
    }
    //note that whenever we want to access a static variable of a parent class, instead of 'self', we would
    //use the keyword 'parent'.
}

//accessing static variable from outside the class
echo Person4::$centuryBornIn;

//accessing static function
echo Person4::getCenturyBornIn();