<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Index</title>
	</head>
	<body>
	<h1>Movie Store</h1>
	<p>What movies would you like to purchase"</p>
		<form name="shop" method="get" action="payment.php">
			<p><input type="checkbox" name="movie[]" value="spotlight">Spotlight</input></p>
			<p><input type="checkbox" name="movie[]" value="birdman">Birdman</input></p>
			<p><input type="checkbox" name="movie[]" value="12 years a slave">12 Years a Slave</input></p>
			<p><input type="checkbox" name="movie[]" value="argo">Argo</input></p>
			<p><input type="checkbox" name="movie[]" value="the artist">The Artist</input></p>
			<p><input type="checkbox" name="movie[]" value="the kings speech">The King's Speech</input></p>
			<p><input type="submit" value="Checkout"></input></p>
		</form>
	</body>
</html>