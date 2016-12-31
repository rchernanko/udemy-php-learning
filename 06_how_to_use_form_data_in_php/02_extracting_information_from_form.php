<?php

/*

CONTINUED FROM LAST LESSON...

In the previous lesson, we were able to check when the submit button was pressed (and therefore check / know
when some data POSTED)

Now, we want to be able to check / retrieve the username and password data that is entered by the user too.

Key thing is the 'name' attribute in the input forms (username, password, submitButton)

*/

//Again, this super global variable acts like a listener.
//TODO read up on the isset function as well
if (isset($_POST['submitButton'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo $password;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="02_extracting_information_from_form.php" method="post">

    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submitButton">

</form>

</body>
</html>