

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Create an Account</title>
    <meta charset="utf-8">
  </head>
  <body>
	<?php
		$name = $_REQUEST["fullName"];
		$email = $_REQUEST["email"]; 
		$pass = $_REQUEST["password"];
		$repeat = $_REQUEST["repeat"];	
	?>
	<h1> Account Confirmation </h1>
	<p>Full Name: <?php echo $name; ?></p>
	<p>Email: <?php echo $email; ?></p>
	<p>Password: <?php echo $pass; ?></p>
	<p>Repeat Password: <?php echo $repeat; ?></p>
  </body>
</html>
