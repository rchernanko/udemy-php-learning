<?php

//how to remove an item from an array...

$authors = array('Charles Dickens', 'William Shakespeare', 'Richard Jones', 'John Mert');

//1 - array_pop = removes the very last element from the array. you can actually then store the very
//last element in a returned varaible

$lastValue = array_pop($authors);

echo $lastValue . '<br>';

print_r($authors);
echo '<br>';


//BUT what if i want to remove a specific item from an array...

$teams = array(
    'Spurs', 'Arsenal', 'Chelsea', 'Man Utd', 'West Ham'
);

//i would use the unset function on a specific item

unset($teams[1], $teams[3]); //remove arsenal and man utd
print_r($teams);
echo '<br>';


//and with an associative array...

$things = array(
    'quaky' => 'Charles Dickens',
    10 => 'Jane Austen',
    'poetic' => 'William Shakespeare'
);

unset($things['quaky'], $things[10]);
print_r($things);

//you can actually unset (removing / deleting) the entire array by doing this:

unset($authors);
unset($teams);
unset($things);