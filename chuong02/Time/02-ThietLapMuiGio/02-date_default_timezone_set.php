<?php
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$timeZone = date_default_timezone_get();
	echo $timeZone;
	
	$time = getdate();
	
	echo "<pre>";
	print_r($time);
	echo "</pre>";
?>