<?php 
session_start();
$_SESSION["cardType"] = $_REQUEST["cardType"];
$_SESSION["expMonth"] = $_REQUEST["expMonth"];
$_SESSION["expYear"] = $_REQUEST["expYear"];
$movies = $_SESSION['movie'];
setcookie("name", $_REQUEST["fullName"], time() + 3600, "/");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Review</title>
	</head>
	<body>
	<h1>Movie Store</h1>
	<p>Is your order correct?</p>
	<p>Items:</p>
		<ul>
			<?php foreach($movies as $movie){ ?>
				<li> <?php echo $movie ?> </li>
			<?php } ?>
				
			
		</ul>
	<p>Payment:</p>
		<ul>
			<li>Card Type: <?php echo $_SESSION["cardType"]; ?></li>
			<li>Expiration: <?php echo $_SESSION["expMonth"] . "/" . $_SESSION["expYear"];?></li>
			<li>Full Name: <?php echo $_COOKIE["name"];?></li>
		</ul>
	<form method="get" action="receipt.php">
		<input type="submit" value="Confirm and Check Out"/>
	</form>
	</body>
</html>