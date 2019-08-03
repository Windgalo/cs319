<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>VIEW</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>View Cookies and Sessions</h2>
    <hr>
    <p><a href="create.php">Create</a> | <a href="view.php">View</a> | <a href="delete.php">Delete</a></p>
    <hr>
    <p>Full name: <?php echo $_SESSION["fullName"]; ?> </p>
	<p>Email: <?php echo $_SESSION["email"]; ?> </p>
	<p>Username: <?php echo $_COOKIE["username"]; ?></p>
	<p>Date: <?php echo $_COOKIE["date"]; ?> </p>
  </body>
</html>

<!-- 
Code by Grant Forss Abigail Roland
-->