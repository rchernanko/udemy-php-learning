<?php

//here is an associative array - key / value

$authors = array(
    'quaky' => 'Charles Dickens',
    10 => 'Jane Austen',
    'poetic' => 'William Shakespeare',
    'Mark Twain'
);

//Interesting - i have added Mark Twain as a key but it has no value.
//But because I've put an integer of 10 as a previous key, 11 gets added as the mark twain key
//so it looks like this:   11 => 'Mark Twain'

print_r($authors);
echo '<br>';



//accessing values inside an associative array:

echo $authors['poetic'];
echo '<br>';

//find out whether a key exists in an array:

echo array_key_exists(5, $authors); //nothing will be printed here because 5 does not exist as a key

echo array_key_exists('poetic', $authors); //will print '1'



//find out whether a value exists in an array:
echo 'hello' . '<br>';

echo in_array('William Shakespeare', $authors); //returns '1' for true
echo in_array(124, $authors); //returns nothing for false

//3rd parameter in the in_array function tells us whether the type of the needle we are searching for is exactly an e.g. integer


