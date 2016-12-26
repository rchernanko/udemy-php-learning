<?php

//Single quotes...

$currency = 'penny';

$sampleString = 'A $currency saved is a $currency earned';

echo $sampleString;
echo '<br>';

/*

What happens in above?

- The variable value IS NOT printed out.
- So we get 'A $currency saved is a $currency earned'
- We do not get 'A penny saved is a penny earned'
- We also would see escaped characters in single quote values...
- Single quotes prints everything out AS IS
- So e.g. $name = 'penny\n' will print out 'penny\n' (won't go to the next line)
*/



//Double quotes...

$currency2 = "penny";

$sampleString2 = "A $currency saved is a $currency earned";

echo $sampleString2;
echo '<br>';

/*

What happens in above?

- Instead of printing the variable name (like single quotes), we see the variable values:
- "A penny saved is a penny earned" is printed
- When you use double quotes, the string is evaluated
- Another complexity explained below

*/

$var = 2;

echo "{$var}nd place";
echo '<br>';

//we can also achieve the above through concatenation...

echo $var . "nd place";
echo '<br>';

//Concatenation also works with single quote strings

//now let's use single quotes inside double quotes...doesn't make a difference
echo "St Patrick's Day";