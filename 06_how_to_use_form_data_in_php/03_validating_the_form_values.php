<?php

/*

CONTINUED FROM LAST LESSON...

In the previous lesson, we've got it to a point where we can retrieve the username and password entered by the user

Now, let's validate it!

*/

if (isset($_POST['submitButton'])) {

    $names = array('richard', 'johnnie, edwin', 'sarah', 'thomas');
    $minimum = 5;
    $maximum = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    //If the length of the username string is less than 5...
    if (strlen($username) < $minimum) {
        echo 'Username has to be longer than ' . $minimum . ' characters';
    }

    //If the length of the username string is more than 10...
    if (strlen($username) > $maximum) {
        echo 'Username has to be shorter than ' . $maximum . ' characters';
    }

    //Now let's check if the username already exists within the $names array (i.e. can they log in or not). Normally we would check this against a database...we will come onto that later :-)

    //Note the usage of the in_array built in function and the strtolower :-)

    if (!in_array(strtolower($username), $names)) {
        echo 'Sorry you are not allowed';
    } else {
        echo 'Welcome';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="03_validating_the_form_values.php" method="post">

    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submitButton">

</form>

</body>
</html>