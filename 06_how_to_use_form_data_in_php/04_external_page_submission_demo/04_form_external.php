<?php

/*

CONTINUED FROM LAST LESSON...

In the previous lesson, we validated some of the form data

In this lesson, we will send the form data to another php file (so that all the data is not all in 1 file,
clean it up a little :-)

So I've made the changes...

There is a separate file for the html + it redirects the data to this file :-)

*/

if (isset($_POST['submitButton'])) {

    $names = array('richard', 'johnnie, edwin', 'sarah', 'thomas');
    $minimum = 5;
    $maximum = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) < $minimum) {
        echo 'Username has to be longer than ' . $minimum . ' characters';
    }

    if (strlen($username) > $maximum) {
        echo 'Username has to be shorter than ' . $maximum . ' characters';
    }

    if (!in_array(strtolower($username), $names)) {
        echo 'Sorry you are not allowed';
    } else {
        echo 'Welcome';
    }
}