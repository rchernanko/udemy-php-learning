<?php 

/* 

TASKS:

Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

Step 2: Add the two variables and display the sum with echo:

Step3: Make 2 Arrays with the same values, one regular and the other associative
	 
*/
    
//1

$number1 = 10;
$number2 = 20;

//2

echo $number1 + $number2 . '<br>';

//3

$array = array('Richard', 'John', 'Rubio');

$associativeArray = array('FirstName' => 'Richard', 'SecondName' => 'John', 'ThirdName' => 'Rubio');

echo($array[0] . '<br>');
echo($associativeArray['FirstName']);

?>