<?php

//in order for me to refer to the Person3 class in this php script, i must include it...
//include = remember this actually evaluates the file you include... differs to 'require'

include '20_constructors.php'; //Normally, the file name should be the same as the class name.

$newPerson = new Person3('Johnathan', 'Ross', 1957);
echo $newPerson->getFirstName();

//she mentioned the include_once keyword...
//http://php.net/manual/en/function.include-once.php

//include_once '20_constructors.php';