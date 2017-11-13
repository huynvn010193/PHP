<?php
	$time = getdate();
	echo "<pre>";
		print_r($time);
	echo "</pre>";
	
	$hours = $time["hours"];
	echo $hours;
?>