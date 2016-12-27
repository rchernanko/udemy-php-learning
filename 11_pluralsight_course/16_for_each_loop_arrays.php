<?php

$authorsAssociative = array(
    'quaky' => 'Charles Dickens',
    'brilliant' => 'Jane Austen',
    'poetic' => 'William Shakespeare'
);

//looping through an array with a for each loop

foreach ($authorsAssociative as $author) {
    echo $author . '<br>'; //prints out all the values
}

//but how can i get the keys...?

foreach ($authorsAssociative as $key => $val) {
    echo $key . ' : ' . $val . '<br>'; //prints out all the keys and values
}