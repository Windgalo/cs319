<?php set_time_limit (3); 

$animals = array('Turtle', 'Dog', 'Koi', 'Sloth', 'Cat', 'Tucan');
sort($animals);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	</head>
	<body>
		<select id="animalList" name="animalList">
		<?php
			for ($counter = 0; $counter < 6; $counter++){		
		?>
			<option><?php echo $animals[$counter]; ?></option>
		<?php			
			}
		?>
		</select>
	</body>
</html>