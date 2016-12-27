<?php

//this differs to include.
//basically, when you say include a file, if the file doesn't exist, the script would throw an error but would
//then continue to execute

//require differs in that if you state require and the file cannot be found, the script will throw errors
//and stop executing - will show a FATAL error - this is where the script terminates
require '223435450_constructors.php';

$newPerson = new Person3('Johnathan', 'Ross', 1957);
echo $newPerson->getFirstName();

//again, there is a require_once as well...