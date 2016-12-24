<?php include '../07_how_to_use_databases_in_php/10_11_update_and_delete_records_in_db/10_db.php'; ?>

<?php

/*

SQL injection is e.g. someone going on to our login form and instead of putting a username in, putting a SQL
query that could e.g. drop our database.

So we basically need to make it more robust...

One way to do that is by using a built-in function called mysqli_real_escape_string, as below:

Now, I am not going to include the login form in this section, just the php...If i want to do an actual demo, I will
have to refactor my code (from the lessons i skipped in the previous section) and watch the video again...

 */

//If the submit button is pressed on the form...
if (isset($_POST['submit'])) {
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];

    /*
     * Here is the built in function - basically this helps to escape characters in a string and would allow me to
     * have a username with e.g. an apostrophe in it...
     * It basically helps you to 'clean' the data before entering it in any SQL query
     */
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    //TODO sit down with Toto to understand this a little more

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error($connection));
    } else {
        echo "Record created";
    }
}