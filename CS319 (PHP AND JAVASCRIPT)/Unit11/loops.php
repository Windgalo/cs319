<?php set_time_limit (3); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Loop Practice!</title>
		<meta charset="utf-8">
	</head>
	<body>
	<h1> Do... While Loop </h1>
	<ul>
		<?php
			$counter = 1;
			do {		
		?>			
			<li><?php echo $counter ?></li>
		<?php
			$counter++;
			} 
			while ($counter <= 10);
		?>
	</ul>
	
	<h1> For Loop </h1>
	<ul>
		<?php
			for ($counter = 1; $counter <= 10; $counter++){		
		?>
			<li><?php echo $counter ?></li>
		<?php			
			}
		?>
	</ul>
	
	<h1> For Each Loop </h1>
	<ul>
		<?php
			$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
			foreach($numbers as $number){	
		?>
			<li><?php echo $number;?></li>
		<?php
			};
		?>
	</ul>
	</body>
</html>