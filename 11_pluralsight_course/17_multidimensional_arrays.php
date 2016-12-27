<?php

$authors = array(
    'Male' => array(
        'Charles Darwin' => array('A Christmas Carol', 'Oliver Twist'),
        'William Shakespeare' => array('Romeo and Juliet', 'Hamlet'),
        'Mark Twain' => array('Tom Sawyer', 'Prince and the Pauper')
    ),
    'Female' => array(
        'L.M.Mpontgomery' => array('Anne of Green Gables', 'Yep'),
        'Someone else' => array('Little Women')
    )
);

//print_r($authors);
echo '<br>';

print_r($authors['Male']['Charles Darwin'][0]); //gets a christmas carol

//practice makes perfect...