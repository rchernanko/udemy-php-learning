<?php

//Giving parameters default values
//So i will give the tempYear parameter a default value
//IMPORTANT = any parameters that do not have default values need to be at the beginning of the function signature
//All parameters that have default values need to be at the end of the function signature

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