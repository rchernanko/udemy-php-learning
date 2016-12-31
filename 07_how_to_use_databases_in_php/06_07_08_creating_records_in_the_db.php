<!--

06:

So we've created a database, and created a login form.

Now let's start understanding how to get everything communicating

First thing - let's test that the form is sending the data correctly...(06 lesson)

07:
- connect with the db!

08:
- actually start creating records in the db via our code...

-->

<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    /*
    
    Prior to me connecting to the database, this is what i did to just check things were all hooked up correctly on the form...
    
    if($username && $password) { 
        //if the username and password are not null. NOTE that I could use isset as well
        echo $username;
        echo $password;
    } else {
        echo 'this field cannot be blank';
    }
    
    
    Now let me connect to the database...to do this I am going to use an api (mysqli), as below:

    mysqli_connect is a built in function that allows me to connect to the db. I have to pass in 4 parameters -
    by default, the username is 'root' and the password is empty. The last parameter is the database we created earlier

    */

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo 'we are connected';
    } else {
        die('Database connection failed'); //'die' is the exception / error keyword TODO read more
    }

    //Now let's make a query to the db using some SQL
    //Remember, the table we created inside the 'loginapp' database is called 'users'

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";
    //The .= above acts as concatenation.

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error());
    }

}