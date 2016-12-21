<?php 

/*

Associative arrays - different to a normal array - basically similar to a map in java

In the below, I am initialising an array, with a 'key' of "first_name" and a value of "Richard"...

I can then 'get' the value in the associative array via it's label (php speak for key).

*/

$names = array('first_name' => 'Richard',
              'last_name' => 'Chernanko');

//print_r($names);

//below prints out "Richard Chernanko"
echo $names['first_name'] . ' ' . $names['last_name'] . '<br>';

?>