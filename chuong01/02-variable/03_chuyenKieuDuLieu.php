<?php
	$number = 12.34;
	//chuyển kiểu cách 1
	echo (int)$number;
	
	//cách 2
	echo "<br/>";
	settype($number, "integer");
	echo $number;
?>