<?php

//sorting an array (indexed)

$authors = array(
    'Charles Dickens',
    'William Shakespeare',
    'Richard Jones',
    'John Mert'
);

//few different ways

//1

sort($authors); //sorted alphabetically
print_r($authors);
echo '<br>';

//2 - asort

asort($authors); //preserves the keys of the values of the array
print_r($authors);
echo '<br>';
//so this will print
//Array ( [0] => Charles Dickens [3] => John Mert [2] => Richard Jones [1] => William Shakespeare )




//sorting an array (associative)


$authorsAssociative = array(
    'quaky' => 'Charles Dickens',
    'brilliant' => 'Jane Austen',
    'poetic' => 'William Shakespeare'
);

//again, few different ways

//1 - you can use sort on an associative array BUT all of the keys will be replaced + you'll actually have an indexed array
//with the values in e.g. alphabetical order

//2 - asort - more valuable for associative arrays! keeps the keys, but sorts the values into order
//Array ( [quaky] => Charles Dickens [brilliant] => Jane Austen [poetic] => William Shakespeare )

//asort($authorsAssociative);
//print_r($authorsAssociative);

//3 - ksort - sorts associative array by keys, not values

ksort($authorsAssociative);
print_r($authorsAssociative);

//Array ( [brilliant] => Jane Austen [poetic] => William Shakespeare [quaky] => Charles Dickens )