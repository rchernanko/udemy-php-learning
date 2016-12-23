<?php

//How to get functions to return values...


//Pretty simple really - good thing is that you don't have to define a data-type in the function signature

function addNumbersAgain($number1, $number2)
{
    $sum = $number1 + $number2;

    return $sum;
}

$result = addNumbersAgain(235, 235);

echo $result . '<br>';

$result2 = addNumbersAgain(22, $result);

echo $result2;