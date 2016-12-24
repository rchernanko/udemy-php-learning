<?php include '10_db.php' ?>
    <!--

    When we include the file above, we need to ensure that the connection variable is global so that it can be
    accessed from within this file

    -->

<?php

function showAllData()
{
    global $connection;
    //If I don't use 'global' keyword here, this function does not know that the variable is referring to something in another, included file
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error());
    }

    //Reading from the db, While there is a row, assign the 'id' of each row to an 'id' variable
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];

        //Show that variable in the id select dropdown on the update forms
        echo "<option value='$id'>$id</option>";
    }
}

function updateTable()
{
    global $connection;
    //If I don't use 'global' keyword here, this function does not know that the variable is referring to something in another, included file
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    //Now let's update the users table in the database...
    //username and password are columns in the db users table

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    //And now for another SQL keyword - where
    $query .= "WHERE id = $id "; //this variable doesn't need any quotes around it, because it is an integer...

    //Now let's make the query

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error($connection));
        //the mysqli_error() is a really important function for debugging. it tells me what has gone wrong!
    }
}

function deleteRows()
{
    global $connection;
    //If I don't use 'global' keyword here, this function does not know that the variable is referring to something in another, included file
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    //Now let's update the users table in the database...
    //username and password are columns in the db users table

    $query = "DELETE from users ";
    $query .= "WHERE id = $id "; //this variable doesn't need any quotes around it, because it is an integer...

    //Now let's make the query

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error($connection));
        //the mysqli_error() is a really important function for debugging. it tells me what has gone wrong!
    }
}