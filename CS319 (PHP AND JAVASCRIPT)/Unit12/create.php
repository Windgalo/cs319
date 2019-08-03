<?php
session_start();
$_SESSION["fullName"] = "Grant Forss";
$_SESSION["email"] = "123@gmail.com";

setcookie("username", "forssmg", time() + 3600, "/");
setcookie("date", date("F j, Y"), time() + 3600, "/");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CREATE</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>View Cookies and Sessions</h2>
    <hr>
    <p><a href="create.php">Create</a> | <a href="view.php">View</a> | <a href="delete.php">Delete</a></p>
    <hr>
    <p></p>
  </body>
</html>


<!-- 
Code by Grant Forss Abigail Roland
-->