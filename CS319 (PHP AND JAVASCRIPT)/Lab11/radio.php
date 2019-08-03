<?php set_time_limit (3); 

$colors = array('Purple', 'Green', 'Yellow', 'Red', 'Black', 'Orange');
sort($colors);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	</head>
	<body>
		<?php
			$counter = 0;
			do {		
		?>			
			<p><input type="radio" name="colors" id="<?php echo $colors[$counter] ?>"><?php echo $colors[$counter]; ?></input></p>
		<?php
			$counter++;
			} 
			while ($counter < 6);
		?>
	</body>
</html>