<?php

define('NAME', 'Richard');

$intVar = 1234;
$stringVar = 'I am a string';
$boolVar = false;
$floatVar = 3324.34;

//I want to know if the value inside the intVar variable is actually an int
echo is_int($intVar); //returns 1 if its a success and nothing if its false
echo '<br>';

//for strings
echo is_string($stringVar);
echo '<br>';


//for floats
echo is_float($floatVar);
echo '<br>';


//for booleans
echo is_bool($boolVar);
echo '<br>';


//for constants - has the constant been defined...i.e does it have a value:
echo defined('NAME');