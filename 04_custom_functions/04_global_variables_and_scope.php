<?php

//Global variables and scope

$x = 'outside'; //defining a variable

function convert()
{
    //Within this method, i am now saying, 'refer to the global variable $x'
    global $x;
    $x = 'inside';
}

echo $x; //will say outside
echo '<br>';

convert(); //switches to inside

echo $x; //will say inside
echo '<br>';

/*

Good examples:

http://php.net/manual/en/language.variables.scope.php

*/