<?php 
set_time_limit(3);

$database = new PDO("mysql:host=dario.cs.uwec.edu;dbname=SIASMJ;charset=UTF-8", "SIASMJ", "YHZLFPZA", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$author_num = $_REQUEST["author"];


$booksByQuery = "SELECT author_last, author_first FROM henry_author WHERE author_num = '$author_num'";
	$booksByResult = $database->query($booksByQuery)->fetch();

$booksQuery = "SELECT henry_book.book_code AS code, title FROM henry_book INNER JOIN henry_wrote ON henry_book.book_code = henry_wrote.book_code WHERE author_num = '$author_num'";
	$booksResult = $database->query($booksQuery)->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Search</title>
	</head>
	<body>
		<h1>Henry's Books</h1>
		<h2>Books by <?php echo $booksByResult["author_first"] . " " . $booksByResult["author_last"];?></h2>
		<table border= "2">
			<th>Code</th><th>Title</th>
			 <?php
				$index = 0;
				while ($index < count($booksResult)) {
				$currentBook = $booksResult[$index];
			  ?> 
				<tr><td><?php echo $currentBook["code"]?> <td><?php echo $currentBook["title"]?></tr>
			  <?php $index++;
					} 
			  ?>
		</table>
	</body>
</html>