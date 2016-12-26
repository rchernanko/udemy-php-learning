<?php

//Giving parameters default values
//So i will give the tempYear parameter a defult value

function bookByAuthorYear($tempAuthorName, $tempYear = 1910)
{
    echo $tempAuthorName;
    echo "\n";
    echo $tempYear;
    echo "\n";
}

$year = 1920;
$authorName = 'William Shakespeare';

//Here, I am overriding the default value of tempYear
bookByAuthorYear($authorName, $year);

//But if I don't pass in a second parameter, the default will be used instead
bookByAuthorYear($authorName);