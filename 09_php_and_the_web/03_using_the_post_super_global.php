<?php

/*

You can extract data using the super global variable POST.

We've done this in previous lessons, but let's go through it again...

So when the submit button is pressed on the form, because the "method" attribute is set to "post".
it will send the information entered by the user to the $_POST superglobal variable.

Once the $_POST detects something (isset), it will then print out the text the user entered into the "name" input

*/

if (isset($_POST['submit'])) {

    echo $_POST['name'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="03_using_the_post_super_global.php" method="post">
    <input type="text" name="name">
    <input type="submit" name="submit">
</form>

</body>
</html>
