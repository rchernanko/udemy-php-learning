<!--

Listening to the first parts of the course:

1)

Important to make a plan...how much i want to do per day?

2)

General info: 

- PHP runs off a server.
- There are many different softwares out there that we can use that will act as servers. We download it, run php and databases etc. This doesn't doesn't actually change anything on our computer 
- We will use XAMP
https://www.apachefriends.org/index.html

3)

the root directory for my server is XAMPP > htdocs directory

i've added demo-2 folder (which is the exercises files downloaded)-->


<!--Opening and closing tags in php files-->

<!--If there is no html in the php file, the closing tag is redundant-->

<?php

//I can add a comment here, within the php

/* I can add a block comment like this, again, within the php */

echo 'hello student';

//I can also embed html in my php:

echo '<h1>Hello</h1>';

//NOTE - you don't need a closing tag for php files IF the file only includes PHP code.
//i.e. If the php code was found within an html file (or a php file with html code), we would need the closing tag.
//But in this instance (and many other files in this project, it's not necessary)