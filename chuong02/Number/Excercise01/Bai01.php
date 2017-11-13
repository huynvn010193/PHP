<?php
	require_once 'funtion-fractions.php';
	
	$fractions = "52/6";
	
	
	$result = optimizeFraction($fractions);
	// chuyển mảng thành 1 chuỗi
	$resultString = implode("/", $result);
	echo $resultString;
?>