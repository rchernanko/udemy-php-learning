<!--

CRUD continued

- We have already created, read and updated records in the db
- Now let's delete record(s) in the db using another SQL query

-->

<?php include "10_db.php"; ?>
<?php include "10_functions.php"; ?>

<?php

if (isset($_POST['submit'])) {

    deleteRows();
}

?>

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
        <form action="11_delete_form.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Delete">
        </form>
    </div>
</div>

</body>
</html>