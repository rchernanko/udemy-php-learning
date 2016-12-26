<?php

//php has a cool feature where you can call a function by using a variable name

function getAuthor()
{
    echo 'Charles Dickens';
}

$variableFunctionName = 'getAuthor'; //So i am assigning the function to this new variable

$variableFunctionName(); //and then i am calling the variable + therefore executing the getAuthor() function