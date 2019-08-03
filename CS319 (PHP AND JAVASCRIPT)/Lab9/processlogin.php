<?php
	$u = $_REQUEST["username"];
	$p = $_REQUEST["password"];
	
	if ($u == "admin" && $p == "root"){
		echo "You have logged in successfully.";
	} else {
		echo "Invalid login.";
	}
?>
