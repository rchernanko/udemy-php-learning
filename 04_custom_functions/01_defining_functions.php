<?php

//Defining functions

//I'll define a function below:

function saySomething()
{
    echo 'hello student';
}

//And now let me call it:

saySomething();

echo '<br>';
echo '<br>';

//Of course, similar to java you can call functions within functions:

function initialise()
{
    echo 'initialising';
    calculate();
}

function calculate()
{
    echo 2 + 3;
}

initialise();
//It doesn't seem to matter where i call the initialise function within this file, it will always be called. i.e. i could have it at the top of this file and it would still work ok.