<?php

/*
 * In the last lesson, we learnt how to set a cookie.
 * Now let's learn how to read the cookie, using the $_COOKIE superglobal variable :-)
 * First let's set the cookie again...
 */

$name = 'Somename';
$value = '100';
$expiration = time() + (60 * 60 * 24 * 7);

setcookie($name, $value, $expiration);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

//Now that the cookie has been set, let's read the cookie information
//Note that $_COOKIE contains the cookie information in an associative array

//isset — Determine if a variable is set and is not NULL
//http://php.net/manual/en/function.isset.php
if (isset($_COOKIE['Somename'])) {

    $someone = $_COOKIE['Somename'];
    echo $someone; //echos the value of the cookie...so 100

} else {

    $someone = '';
}

?>

</body>
</html>
