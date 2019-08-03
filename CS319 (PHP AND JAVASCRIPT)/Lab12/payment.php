<?php 
session_start();
$_SESSION["movie"] = $_REQUEST["movie"];

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Payment</title>
	</head>
	<body>
	<h1>Movie Store</h1>
	<p>Please enter your payment information</p>
		<form name="checkout" method="get" action="review.php">
			<p><input type="radio" name="cardType" value="American Express"/>American Express</p>
			<p><input type="radio" name="cardType" value="Discover"/>Discover</p>
			<p><input type="radio" name="cardType" value="MasterCard"/>MasterCard</p>
			<p><input type="radio" name="cardType" value="Visa"/>Visa</p>
			<p>Expiration Month: <input type="number" name="expMonth"/> / Year: <input type="number" name="expYear"/></p>
			<p>Full Name: <input type="text" name="fullName"/></p>
			<p><input type="submit" value="Confirm and Purchase"/></p>
		</form>
	</body>
</html>