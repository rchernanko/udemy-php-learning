<?php

//Function parameters

//I am going to add some function parameters to the greeting function below:

function greeting($message)
{

    echo $message;

}

greeting('hello student');

echo '<br>';

//Is flexible in that i don't have to define the parameter as a particular data-type
greeting(1);
echo '<br>';


//here's another one

function addNumbers($number1, $number2) {
    echo 'The sum of the 2 numbers is : ' . "$number1 + $number2";
}

//Interesting! The double quote helps to evaluate, whereas the single quotes are purely strings...

addNumbers(4,3);

?>