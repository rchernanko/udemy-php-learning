<!--

Using dynamic data : 

So let's imagine I have a website with 10 pages and I want the same h1 html tag on each page 
e.g. Richard's Official Site.
 
How can I make this dynamic, using php, so that I don't have to copy and paste the static "richard's official site" text on every page, but instead can have it just updated in 1 place?
 
So before, the html would've looked like this:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1>Richard's Offical Site</h1>
    
</body>
</html>


Now, let's make the h1 tag pull from dynamic data, by using php:

- We will create a function that calls a variable defined somewhere else
- So in the example below, this is a dirty, quick and easy example! I have created a title variable and assigned it the value I want.
- In my h1 tag, I then call that variable
- Of course, what would normally happen is that we would keep the variable in another separate file

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php
    
    $title = 'Richard\'s Official Site';
    
    ?>
    
    <h1><?php echo $title; ?></h1>
    
</body>
</html>