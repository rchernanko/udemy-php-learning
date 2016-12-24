<?php include '../07_how_to_use_databases_in_php/10_11_update_and_delete_records_in_db/10_db.php' ?>

<?php

/*
* How to prevent someone e.g. getting hold of user's passwords...
* We can encrypt it. So that e.g. if they type in the password 'hello', we change it to a longer, more secure password
* through encryption - the password never changes for the user, but its encrypted in the background
*
* First thing I've done is changed the maximum length of a password in PhpMyAdmin from 32 to 200
*
* Again, to help with password encryption, we are going to use a built-in function from php, called 'Crypt'
* There are many different ways to implement Crypt - we will be using something called 'Blowfish' for our encryption
*
* http://php.net/manual/en/function.crypt.php
*/

//If the submit button is pressed on the form...
if (isset($_POST['submit'])) {
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    //And now for the crypt function...
    $hashFormat = "$2y$10$"; //not sure whether double quotes are needed but doing it anyway...

    /*
     * $2y$ is the hash format recommended in the documentation for blowfish
     * 10 tells the crypt function how many times to run the hash
     */

    $salt = "iusesomecrazystrings22";

    $hashF_and_salt = $hashFormat . $salt;

    //Now we will pass in the hash format and salt into the crypt function.
    //TODO read around this a little more

    $password = crypt($password, $hashF_and_salt);

    //And now the password should be encrypted!!! Better security!

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error($connection));
    } else {
        echo "Record created";
    }
}