<?php

namespace ControlStructures\ForEachLoops;

/*

For each loop 

- Works only with arrays
- Good for iterating through values in arrays

Example below...

*/

$numbers = array(2, 46, 345, 565);

foreach ($numbers as $number) {

    //In above, $numbers is the array
    //Slightly different to Java then - is like the other way around

    echo $number . '<br>';

}

$associativeArray = ['FirstLetter' => 'A', 'SecondLetter' => 'B', 'ThirdLetter' => 'C'];

//print_r($associativeArray);

foreach ($associativeArray as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}
//http://php.net/manual/en/control-structures.foreach.php