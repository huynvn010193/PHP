<?php
	$start = 2;
	$end = 20;

	// hàm range trả về phạm vi các số từ start đến end.
	
	//$array = range($start, $end); -> dãy số từ 2 đến 20
	$array = range($start,$end,2); //-> dãy số cách nhau 2 don vi
	
	echo "<pre>";
		print_r($array);
	echo "</pre>";
	
	
?>