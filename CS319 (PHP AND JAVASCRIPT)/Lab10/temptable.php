<?php
	$startTemp = $_REQUEST["startTemp"];
	$endTemp = $_REQUEST["endTemp"];
	
	//echo "start: " . $startTemp . "<br> end: " . $endTemp;
	
	echo "<style> table, th, td { border: 1px solid black } </style>
			<table>
			<tr>
				<th>°F</th>
				<th>°C</th>
				<th> K</th>
			</tr>";
	$currentTemp = $startTemp;
	while($currentTemp <= $endTemp){
		$celsius = (($currentTemp - 32) * (5/9));
		$kelvin = (($currentTemp + 459.67) * (5/9));
		echo "<tr>
				<td>" . round($currentTemp) . "</td>
				<td>" . round($celsius) . "</td>
				<td>" . round($kelvin) . "</td>
			</tr>";
		$currentTemp = $currentTemp + 5;	
	}		
			
?>