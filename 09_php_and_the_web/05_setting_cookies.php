<?php

/*

How do we make an application that sets a cookie for a user,
reads the data back, and then does things with that data...?

WELL, it involves another superglobal variable $_COOKIE

Know that to set cookies, we will use a function called setCookie();

Also know that the cookie information is saved in a superglobal called COOKIE

$_COOKIE; - note that this is an associative array

*/


//In this lesson, let's set the cookie first

$name = 'Somename';
$value = '100';
$expiration = time() + (60 * 60 * 24 * 7); //seconds * minutes * hours * days = 1 week

setcookie($name, $value, $expiration);

//Now, every time a user visits this page, the cookie will be set...and it will expiry in a week

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
