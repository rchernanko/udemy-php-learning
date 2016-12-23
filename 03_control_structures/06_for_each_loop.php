<?php

/*

For each loop 

- Works only with arrays
- Good for iterating through values in arrays

Example below...

*/

$numbers = array(2, 46, 345, 565);

foreach ($numbers as $number) {

    //In above, $numbers is the array
    //Slightly different to Java then - is like the other way aroun

    echo $number . '<br>';

}

//Figure out how to do a foreach with associative arrays too
//http://php.net/manual/en/control-structures.foreach.php

?>