
<!doctype html>
<head>
	<title>Calculator Thing</title>
	<meta charset="utf-8">
</head>
<body>
	<form name="doMath" id="doMath" action="math.php" method="get">
		<p>First Number: <input type="number" name="firstNumber" id="firstNumber"></p>
		<p>Operation: <select name="op" id="op">
			<option value="1">Add</option>
			<option value="2">Subtract</option></select></p>
		<p>Second Number: <input type="number" name="secondNumber" id="secondNumber"></p>
		
		<p><input type="submit" name="submit" id="submit" value="Calculate"></p>
	</form> 
</body>
</html>