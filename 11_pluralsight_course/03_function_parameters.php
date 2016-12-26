<?php

//defining function parameters

function bookByAuthor($authorName, $year)
{
    echo $authorName;
    echo $year;
    echo '<br>';
}

bookByAuthor('William Shakespeare', 1999);

$anotherAuthor = 'Richard Chernanko';
$year = 23234;

bookByAuthor($anotherAuthor, $year);