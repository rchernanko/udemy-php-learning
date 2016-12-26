<?php

/*
 * Another way to use strings in php is with here doc. Syntax is important
 * EOT - stands for End of text. But i think that is just a convention, you can use anything
 * Basically, this acts like a double quoted string. I can write whatever I want between the EOTs
 */

echo <<<EOT

Hello my name is richard,
i love this,
it is great,
like a poem,
this will be formatted when i print it to the console

EOT;
//nothing else can be on the above line...not even comments