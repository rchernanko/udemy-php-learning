<?php

/*
 * Sessions are a way to get user's information.
 * Comparing cookies and sessions, cookies allow you to save only a small amount of information in the browser.
 *
 * 1) With sessions, we create a file on our server to save the user's information (see below, we use the
 * session_start() function to do this).
 *
 * 2) Then when the user comes to that particular page, we set a cookie in their browser with a reference to this
 * file on the server. The user's information is saved on the server, which ultimately means we can save lots of
 * information (vs cookies).
 *
 * With cookies, because we save the information into the user's browser, we cannot save as much information.
 *
 * Let's see how sessions work!
 */


//Let's start a session

session_start();
/*
 * Above is a built in function.
 * When the user visits this page (07_how_to_use_sessions_in_php.php), this function will create a session file
 * on the server. The function also drops a cookie into the browser entitled 'PHPSESSID' which has a reference to
 * this aforementioned session file. We can then start putting data into this session file, and when the user comes
 * back to the page again, we can reference that file in the server and pull information from there

So now that the session file is created, I want to add some values in the file using another super global variable.
Saving information into the session is good as it allows me to carry over the information between multiple pages.
Of course, you can use cookies to do that as well but cookies do not allow you to store AS MUCH information.
There are pros and cons of both, of which he will not get into in this lesson.

So I will set a greeting of 'Hello Richard'...

*/

$_SESSION['greeting'] = 'Hello Richard, this is you';

/*

NOW, when I go to another page (07a_how_to_use_sessions_in_php.php), as long as I declare the session_start() function
on that page, if I echo $_SESSION['greeting'], it will print the greeting above. I.E. the session information has been
shared across 2 different pages

Note that the session ends when I quit the browser

*/