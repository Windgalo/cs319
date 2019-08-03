<!-- Code by Abigail Roland and Grant Forss -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Candy Customers</title>
    <meta charset="utf-8">
  </head>
  <body>
 
  <h1>Candy Customers</h1>
  
   <?php
  $database = new PDO("mysql:host=dario.cs.uwec.edu;dbname=SIASMJ;charset=UTF-8", "SIASMJ", "YHZLFPZA", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$sqlQuery = "SELECT cust_id, cust_name, cust_addr, cust_zip, cust_phone FROM candy_customer";
	$customers = $database->query($sqlQuery)->fetchAll();
	?>
	
	<table border="2">
	<tr>
		<th>ID</th><th>Name</th><th>Address</th><th>ZIP</th><th>Phone #</th>
	<?php
	$index = 0;
      while ($index < count($customers)) {
        $currentCustomer = $customers[$index];
		?>
	
	<tr>
        <td><?php echo $currentCustomer["cust_id"]; ?></td>
		<td><?php echo $currentCustomer["cust_name"]; ?></td>
		<td><?php echo $currentCustomer["cust_addr"]; ?></td>
		<td><?php echo $currentCustomer["cust_zip"]; ?></td>
		<td><?php echo $currentCustomer["cust_phone"]; ?></td>
    </tr>
	<?php
			$index++;
	 } ?>
	</table>

  </body>
</html>
