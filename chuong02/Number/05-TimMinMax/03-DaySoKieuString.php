<?php
	$strNumber = "1,-3,8.5,8.51,4,9";
	
	// Chuyển strNumber thành 1 mảng;
	$arrNumber = explode(",", $strNumber);
	
	$min = min($arrNumber);
	$max = max($arrNumber);
	$sum = array_sum($arrNumber);
	
	echo "Min: " .$min .'<br/>';
	echo "Max: " .$max .'<br/>';
	echo "Tong: " .$sum;
?>