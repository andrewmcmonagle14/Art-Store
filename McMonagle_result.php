<?php
/*  this page receives the data from feedback.html
    It will receive: title, name, email, response, comments, and submit in $_GET
    Create shorthand versions of the variables */
$title = $_GET['title'];
$description = $_GET['description'];
$genre = $_GET['genre'];
$subject = $_GET['subject'];
$medium = $_GET['medium'];
$year = $_GET['year'];
$museum = $_GET['museum'];
$new = $_GET['new'];
$old = $_GET['old'];

// Print the received data:
print "<p>Title: " . $title . "</p>" .
"<p>Description: " . $description . "</p>" . 
"<p>Genre: " . $genre . "</p>" . 
"<p>Subject: " . $subject . "</p>" . 
"<p>Medium: " . $medium . "</p>" . 
"<p>Year: " . $year . "</p>" . 
"<p>Museum: " . $description . "</p>" . 
"<p> " . $new . "</p>" . 
"<p> " . $old . "</p>";


?>
