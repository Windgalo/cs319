<?php 
	$image = "Kvothe.jpg";
	$name = "Kvothe";
	$birthdate = "January 1, 2000";
	$age = date_diff(date_create($birthdate), date_create(today))->y;
	$quote = "\"You do not know the first note of the music that moves me.\" "
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Intro to PHP</title>
    <meta charset="utf-8">
  </head>
  <body>
	<img src= <?php echo $image ?> alt= <?php echo $name ?>>
	<p>Name: <?php echo $name ?> </p>
	<p>Birthdate: <?php echo $birthdate ?>  </p>
	<p>Age: <?php echo $age ?>  </p>
	<p>Quote: <?php echo $quote ?>   </p>
  </body>
</html>
