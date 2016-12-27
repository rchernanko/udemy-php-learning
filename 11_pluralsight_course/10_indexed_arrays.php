<?php

//2 different ways to create an indexed array

//1
$authors = array('Charles Dickens', 'William Shakespeare', 'Richard Jones', 'John Mert');

print_r($authors);
echo '<br>';

//2
$books = ['Lord of the rings', 'Jumanji', 'Bible'];

print_r($books);
echo '<br>';


//arrays can hold all data types...
$allTypes = [10, 1.3, 'Howdy', true];

print_r($allTypes);
echo '<br>';



//accessing values inside an indexed array:

echo $authors[3];
echo '<br>';



//find out whether a value exists in an array:

echo in_array('William Shakespeare', $authors); //returns '1' for true
echo in_array('William', $authors); //returns nothing for false

//3rd parameter in the in_array function tells us whether the type of the needle we are searching for is exactly an e.g. integer

