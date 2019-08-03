<?php 
set_time_limit(3);

$database = new PDO("mysql:host=dario.cs.uwec.edu;dbname=SIASMJ;charset=UTF-8", "SIASMJ", "YHZLFPZA", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$authorQuery = "SELECT author_num, author_last, author_first FROM henry_author ORDER BY author_last, author_first";
$authors = $database->query($authorQuery)->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Search</title>
	</head>
	<body>
		<h1>Henry's Books</h1>
		<h2>Search by Author</h2>
		<form name="books" method="get" action="books.php">
			<select name="author">
			  <?php
				$index = 0;
				while ($index < count($authors)) {
				$currentAuthor = $authors[$index];
			  ?> <option value=" <?php echo $currentAuthor["author_num"];?> "><?php echo $currentAuthor["author_last"] . ", " . $currentAuthor["author_first"]; ?></option>
			  <?php $index++;
				}
			  ?>
			</select>
			<input type="submit" value="search" />
		</form>
	</body>
</html>