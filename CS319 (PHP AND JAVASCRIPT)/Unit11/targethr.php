<h1>Target Heart Rate Calculator</h1>
<?php
	$restinghr = $_REQUEST["restinghr"];
	$age = $_REQUEST["age"];
	
	echo "For a " . $age . " year old person with a resting heart rate of " . $restinghr . ": <br><br>";
	
	?><table border="2">
		<tr><th>Intensity</th><th>Target Heart Rate</th><tr>
	<?php
	for($intensity = 0.55; $intensity <=0.95; $intensity = $intensity + 0.05){
		$targethr = (((220 - $age) - $restinghr) * $intensity) + $restinghr;
		?>
			<tr><td><?php echo ($intensity * 100) . "%"; ?></td><td><?php echo round($targethr) . " bpm"; ?></td>
		<?php
	}
	?>
	</table>

