<?php

/*

CRUD

- We have already created a record in the db
- Now let's read from the db using another SQL query

*/

//First, let's check the connection...

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if ($connection) {
    echo 'we are connected' . '<br>';
} else {
    die('Database connection failed');
}

//Now let's make a query
$query = "SELECT * FROM users";

//And then run the query...
$result = mysqli_query($connection, $query);

//Check that results are returned or throw an exception (die)
if (!$result) {
    die('Query failed' . mysqli_error());
}

/*

Now let's iterate through the results of the query, row by row - using a built in function (mysqli_fetch_row).
This function returns an array of strings.

while ($row = mysqli_fetch_row($result)) {
    print_r($row);
    echo '<br>';
}

//There's another way to do this as well, using another in-built function which returns an associative array - see
below. Perhaps gives you the information in a slightly nicer format, easier to understand.
*/

while($row = mysqli_fetch_assoc($result)) {
    print_r($row);
    echo '<br>';
}