<!DOCTYPE html>
<html lang="en">
	<head>
		<title>totalcost.php</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$item1 = array("itemNo" => "123", "units" => 3, "unitCost" => 3.25);
			$item2 = array("itemNo" => "456", "units" => 2, "unitCost" => 4.54);
			$item3 = array("itemNo" => "789", "units" => 4, "unitCost" => 2.88);
			$item4 = array("itemNo" => "159", "units" => 1, "unitCost" => 5.93);
			$items = array($item1, $item2, $item3, $item4);
			
		?>
		<style> table, th, td { border: 1px solid black } </style>
		<table>
			<tr>
				<th>Item No.</th>
				<th># of Units</th>
				<th>Cost per Unit</th>
				<th>Total Cost</th>
			</tr>
				<?php
					$index = 0;
					while ($index < count($items)){
						$currentItem = $items[$index];
						echo "<tr>
								<td>".$currentItem['itemNo']."</td>
								<td>".$currentItem['units']."</td>
								<td>$".$currentItem['unitCost']."</td>
								<td>$".$currentItem['units'] * $currentItem['unitCost']."</td>
							</tr>";
						$index = $index + 1;
					}	
				?>
					
		</table>
	</body>
</html>