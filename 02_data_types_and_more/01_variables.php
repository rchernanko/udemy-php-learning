<?php

//$ sign to define a variable, followed by it's name - can be a string or numbers

$name;
$name2 = 'Richard';
$number = 100;

echo $name2;
echo '<br>';
echo $number;
echo '<br>';

//If I were to echo $name, i would see an error...
//Best practice for naming conventions - camelcase

//Can store many different data types within the php variables:

$float = 100.5;

//Concatenation. Instead of the + in java, php uses a .

echo $name2 . ' ' . 200;

$name2 = '<h1> Hello </h1>';
//interestingly enough, I can have 2 variables of the same name inside the same file...

echo $name2;

?>