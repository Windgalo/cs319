

<?php
	$p = $_REQUEST["p"];
	$r = $_REQUEST["r"];
	$t = $_REQUEST["t"];
	$ans = "";
	
	function interest($principal, $interest, $time){
			$ans = ($principal * (1 + ($interest * $time)));
			return $ans;
	}
	
	echo "After " . $t . " years, an investment of $" . $p . " at a " . $r . "% interest rate will be worth $";
	echo interest($p, $r, $t);
?>
