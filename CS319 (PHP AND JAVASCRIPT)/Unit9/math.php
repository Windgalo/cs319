<?php
	$answer = "";
	$firstNumber = $_REQUEST['firstNumber']; 
	$secondNumber = $_REQUEST['secondNumber'];
	$addOrSub = $_REQUEST['op'];

	if ($addOrSub == '1'){
		function add($firstNumber, $secondNumber) {
			$answer = $firstNumber + $secondNumber;
			echo "Answer: " . $answer;
		}
		add($firstNumber, $secondNumber);
		
	} else {	
		function subtract($firstNumber, $secondNumber) {
			$answer = $firstNumber - $secondNumber;
			echo "Answer: " . $answer;
		}	
		subtract($firstNumber, $secondNumber);	
	}
		

	

	
?>
