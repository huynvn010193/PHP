<?php
	$score = array(1,3,2,4,1,4,2,6,3,1,10);
	$newArray = array_count_values($score);
	
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";
	
?>