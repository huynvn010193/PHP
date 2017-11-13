<?php
	$date = date_parse_from_format('d/m/Y H:i:s', "26/07/2013 13:20:35");
	echo "<pre>";
		print_r($date);
	echo "</pre>";
	$timeStame = mktime($date['hour'],
			$date['minute'],$date['second'],$date['month'],$date['day'],$date['year']
	);
	echo date('H:i:s d/m/Y', $timeStame);
	
?>