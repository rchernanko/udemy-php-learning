<?php

/*

TASK

1) Make an if statement with elseif and else to finally display string saying i love php...

2) Make a for loop that displays 10 numbers

3) Make a switch statement that test against one condition with 5 cases...


*/


//1
if (3 > 10) {
    echo 'something';
} elseif (3 < 10) {
    echo 'i love php';
}

echo '<br>';
echo '<br>';

//2
for ($numberToPrint = 0; $numberToPrint < 10; $numberToPrint++) {
    echo $numberToPrint . '<br>';
}

echo '<br>';
echo '<br>';

//3
$name = 'sarah';

switch ($name) {
    case 'richard':
        echo 'richard is my name';
        break;
    case 'john':
        echo 'john is my name';
        break;
    case 'mary':
        echo 'mary is my name';
        break;
    case 'sarah':
        echo 'sarah is my name';
        break;
    case 'max':
        echo 'max is my name';
        break;
    default:
        echo 'name not recognised';
}


?>