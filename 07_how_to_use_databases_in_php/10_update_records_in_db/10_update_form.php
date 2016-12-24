<!--

CRUD continued

- We have already created and read records in the db
- Now let's update record(s) in the db using another SQL query

BUT we are also going to be doing a little bit of refactoring...

We are going to abstract the database connection into a separate file, entitled '10_db.php'

And we can then "include" that in this file (i.e. in '10_update_form.php')

AND we are also going to have a little update form too - see the html below

-->

<?php include '10_db.php'; ?>
<?php include "10_functions.php"; ?>
<!--Include is similar to importing in java :-) The big difference being that the file gets included AND evaluated...-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <div class="col-sm-6">
        <form action="10_update_form.php" method="update">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <!-- The idea here is that the user can select the Id of the user and then update it's username and/or password -->
            <!-- Remember - The NAME attribute is absolutely vital here. If we don't have this in the html, we cannot
            listen for it in our POST super global variable etc-->

            <div class="form-group">
                <select name="id" id="">
                    <!-- Now, let's call a php function here within the html  -->
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Update">
        </form>
    </div>
</div>

</body>
</html>