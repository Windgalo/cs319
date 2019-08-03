<?php
	$x = 5;
	$y = 3; 
	$z = mt_rand(1, 500); 
	$answer = $x + ($y * $z);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Intro to PHP</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
		echo $x . " + " . "(" . $y . " * " . $z . ")" . " = " . $answer;
	?>
    
  </body>
</html>
