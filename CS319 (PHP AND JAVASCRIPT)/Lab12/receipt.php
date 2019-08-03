<?php 
session_start();
$movies = $_SESSION['movie'];

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Receipt</title>
	</head>
	<body>
		<h1>Movie Store</h1>
		<p>Thank you for your order <?php echo $_COOKIE["name"];?> </p>
		<p>You have ordered: </p>
			<ul>
				<?php foreach($movies as $movie){ ?>
					<li> <?php echo $movie ?> </li>
				<?php } ?>
			</ul>
		
		<p>Payment shall be charged to:</p>
			<ul>
				<li>Card Type: <?php echo $_SESSION["cardType"]; ?></li>
				<li>Expiration: <?php echo $_SESSION["expMonth"] . "/" . $_SESSION["expYear"];?></li>
			</ul>
	</body>
</html>
<?php

session_unset();
session_destroy();
setcookie("name", '', time() - 3600, "/");

?>