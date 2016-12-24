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