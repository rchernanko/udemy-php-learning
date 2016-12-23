<?php

//First of all = make the variable numberList an array by assigning it the array() function:

$numberList = array(23, 64, 267, 478, 267, 8766, 345, '5345', '345', '<h1>Hello</h1>');

//Here I am adding variables to the array immediately,
//Different to Java in that numberList can have several data types in it

//Note that I can also initialise an array by doing this:

//$numbersdfle = [];
//$numbersdfle[0] = 123;
//echo $numbersdfle[0];

/*

Can't do the following with an array:

echo $numberList;

it will throw me an error...

Instead, let's print the values within the array by getting the indexes;

*/

echo $numberList[0];
echo '<br>';
echo $numberList[1];
echo '<br>';
echo $numberList[2];
echo '<br>';
echo $numberList[3];
echo '<br>';
echo $numberList[4];
echo '<br>';
echo $numberList[5];
echo '<br>';

//ALSO...
//we can use a built in function in php - print_r
//to print out human-readable information about a variable
//http://php.net/manual/en/function.print-r.php

print_r($numberList);
//pretty cool, prints out the array and it's indexes