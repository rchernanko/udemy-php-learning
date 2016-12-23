<?php

//Built in math functions
//Obviously I will need to play around with this in a little more detail

//The below does 2 to the power of 7 = 128; (2x2x2x2x2x2x2)
echo pow(2, 7);
echo '<br>';

//it's the same as doing this...
echo (2*2*2*2*2*2*2);
echo '<br>';

//another one - returns a random number...
echo rand();
echo '<br>';

//returns a random number within a defined minimum and maximum value
echo rand(0, 10);
echo '<br>';

//returns the square route of a number
echo sqrt(100);
echo '<br>';

//rounds a float value up to the next integer:
echo ceil(4.6);
echo '<br>';

//rounds a float value down:
echo floor(4.6);
echo '<br>';

//We also have some rounding up / down based on the second digit...
echo round(4.5);
echo '<br>';
echo round(4.4);
echo '<br>';


/*
 * More math functions can be found here:
 * http://php.net/manual/en/ref.math.php
 * TODO
 */