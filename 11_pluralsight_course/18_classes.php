<?php

class Person1
{

    const AVG_LIFE_SPAN = 79;
    public $firstName = 'Richard';
    public $lastName = 'Chernanko';
    public $yearBorn = 1986;

    //functions created inside of a class are called 'methods'
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

    }
}

$myObject = new Person1();

//access a class variable (providing it's public)
echo $myObject->firstName;
echo '<br>';

//override a class variable
$myObject->firstName = 'Sam';
echo $myObject->firstName;
echo '<br>';

//access a class constant - double colon
echo $myObject::AVG_LIFE_SPAN;
echo '<br>';

//or
echo Person1::AVG_LIFE_SPAN;
echo '<br>';

//getters and setters
echo 'Getters and setters' . '<br>';
$newPerson = new Person1();
$newPerson->setFirstName('John');
echo $newPerson->getFirstName();