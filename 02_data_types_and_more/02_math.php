<?php

//Let's use some math to calculate some numbers...

//addition
echo 56 + 45;
echo '<br>';

//subtraction
echo 56 - 45;
echo '<br>';

//multiplcation
echo 3 * 5;
echo '<br>';

//division
echo 15 / 3;
echo '<br>';
echo '<br>';

//slightly more complex
echo 45 + 34 * 45 / 421 - 45;
echo '<br>';
echo '<br>';

//order of operators:
echo 5 + 5 * 10;
//the above results in 55, not 100. we need parentheses
//if i want to add the 5 and 5 before multiplying...
echo '<br>';
echo '<br>';

echo (5 + 5) * 10;
//this will result in 100

//by default, division and multiplication goes before subtraction and addition. We will come back to operations later on in the course;

$number1 = 12;
$number2 = 24;
echo '<br>';
echo '<br>';

echo $number1 * $number2;


?>