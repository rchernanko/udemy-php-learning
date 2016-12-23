<!--

So now we are going to start understanding how to get our database to communicate with php...

Let's create the form first - 05. In 06 and beyond, we will then start communicating with our database...

For the form, we will be using 'bootstrap', a front end framework - Edwin likes this for a bit of style on the forms...

As you can see from the above html, I have added a link to this in the head.

-->

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

<!--The following div names etc are things that are already defined within Bootstrap - Don't get confused-->

<div class="container">

    <div class="col-sm-6">
        <form action="06_07.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>

</body>
</html>