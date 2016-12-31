<?php

/*

We are going to use the 'super global variable' $_POST -

From what i understand, this is listening out until the 'submit' button is pressed on the form defined below...

Once it is pressed, it will echo the below - weird the text is printed in brackets ide , but not via phpstorm...

TODO read up on the $_POST variable

 */

if (isset($_POST['submitButtonPressed'])) {

    echo 'yes it works, the submit button has been pressed';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!--

START HERE - So let's create a basic form using HTML

In 'form' below, the 'action' means that when the data is posted, it will be sent to a particular php
file (in this instance, this file). The 'method' and 'post' means that we are stating that this
data will be posted (as opposed to get etc)

-->

<form action="01_checking_for_form_submission.php" method="post">

    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submitButtonPressed">

</form>

<!--

So because of the $_POST variable in the php file (which i think is pretty much behaving like a listener in
that it's listening to anything that is posted), and because of the 'action' and 'method' attributes we've added in
the form html above, when a user clicks on the submit button, we will know when the submit button has been clicked (i.e.
when data has been posted)

-->

</body>
</html>