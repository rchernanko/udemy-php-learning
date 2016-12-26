<?php

/*

Continued from previous lesson - read notes at the bottom

*/

print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!-- Let's embed some php within the html -->

<?php

$id = 10;
$button = 'Click here';

?>

<a href="02a_using_the_get_super_global.php?id=<?php echo $id; ?>"><?php echo $button; ?></a>

<!--

So, rather than having the id parameter hardcoded in the href link above, it is now a little more
dynamic (in that it's calling the $id variable).

So, now, when i click on the link, the url changes to :

http://localhost/demo/09_php_and_the_web/02_using_the_get_super_global.php?id=10

i.e. the id parameter is added on

Of course, once the get superglobal variable is sent the parameters, it can then do many things with it. e.g. if
GET detects that the id is 10, send user to another page etc - we will look at this in the future

-->

</body>
</html>