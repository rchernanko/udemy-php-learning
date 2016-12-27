<?php

//indexed arrays

$authors = array('Charles Dickens', 'William Shakespeare', 'Richard Jones', 'John Mert');

//adding items to an array...2 ways

//1 - only adds indexed values

array_push($authors, 'Louise May');

print_r($authors);


//2 - preferred method

$authors[] = 'Hello';
print_r($authors);
echo '<br>';


//associative arrays

$authors = array(
    'quaky' => 'Charles Dickens',
    10 => 'Jane Austen',
    'poetic' => 'William Shakespeare'
);

//adding items

$authors['yes'] = 'me'; //yes will be the key and me will be the value
print_r($authors);