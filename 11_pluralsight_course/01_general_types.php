<?php

//INTEGERS

$int = 23432; //integer - php can also handle octal, hexadecimal and binary numbers (and then print them as integers)

//We can use a built in function that prints out the value of the variable and also tells us its type

var_dump($int);
echo '<br>';

//this is great - it would print out e.g.
//int(23432)


//FLOATING POINTS

$float = 2.23534;

var_dump($float);
echo '<br>';


//BOOLEANS

$bool = true;

var_dump($bool);
echo '<br>';

//Interesting - you can convert any value to a boolean...ooo

$hasValue = 3423;
var_dump((bool)$hasValue); //since this variable had a value, it would convert to 'true'
echo '<br>';

//same with the below - because the string variable has a value, it will print out true...
$hasValue4 = 'hiiiiii';
var_dump((bool)$hasValue4); //since this variable had a value, it would convert to 'true'
echo '<br>';

//examples of when the above would return false...
$hasValue2 = ''; //an empty string
var_dump((bool)$hasValue2);
echo '<br>';

$hasValue3 = 0;
var_dump((bool)$hasValue3);
echo '<br>';


//CONSTANTS

//To define a constant, we use the define keyword and pass in 2 parameters.
//1st param = name of the constant. 2nd param = value
//All constant names should be UPPERCASE and separated by underscore
//Constants are global so can be accessed anywhere

define('NEW_CONSTANT', 'oi oi');
echo NEW_CONSTANT;
echo '<br>';


// Works as of PHP 7
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1];