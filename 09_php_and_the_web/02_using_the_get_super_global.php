<?php

/*

In this lesson, we will learn how to pull information from urls using php and then process it

So when you search for e.g. cars in google, the url that we then see in the browser is:

https://www.google.co.uk/webhp?sourceid=chrome-instant&rlz=1C5CHFA_enGB704GB705&ion=1&espv=2&ie=UTF-8#q=cars

Parameters are things like:

* sourceid=chrome-instant
* rlz=1C5CHFA_enGB704GB705
* ion=1
etc

Parameters are divided with the ampersand symbol - &

We will use the super global variable $_GET

When I type in something as a url in my browser, the GET super variable allows me to catch it

$_GET is available anywhere within my project


MORE INFORMATION ON SUPERGLOBAL VARIABLES

From - http://php.net/manual/en/language.variables.superglobals.php

Superglobals — Superglobals are built-in variables that are always available in all scopes

Several predefined variables in PHP are "superglobals", which means they are available in all scopes throughout a script.
There is no need to do global $variable; to access them within functions or methods.

These superglobal variables are:

$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV


ANYWAY, back to it...

*/


print_r($_GET);

/*

So if I launch the browser and do not touch the URL, this above statement prints an empty array

However, when I start to add parameters to the url, the superglobal get variable catches these parameters and they are displayed on the browser.

So for example, if i type in:
http://localhost/demo/09_php_and_the_web/02_using_the_get_super_global.php?id=10&source=reports

i.e. i have added this parameter ?id=10... and also another parameter (separated by the ampersand), source=10

the print_r($_GET) will print out:

Array ( [id] => 10 [source] => reports )

Yay!

So now let's make some html, whereby when a user clicks on the link, it sends the parameter...

 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<a href="02_using_the_get_super_global.php?id=200">CLICK</a>

<!--

So, when the user clicks on the above link, it sends the id parameter (to $_GET) and the get superglobal variable
then prints it out (because of the print_r in the php above). We can make this dynamic so that the user doesn't have
to type in all the parameters in the url themselves!...I've done this in a separate file
02a_using_the_get_super_global.php

-->
</body>
</html>
