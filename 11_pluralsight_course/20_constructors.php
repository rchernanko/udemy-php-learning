<?php

class Person3
{

    const AVG_LIFE_SPAN = 79;

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

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getYearBorn()
    {
        return $this->yearBorn;
    }

    public function setYearBorn($yearBorn)
    {
        $this->yearBorn = $yearBorn;
    }

}

$person1 = new Person3('Richard', 'Chernanko', 1986);