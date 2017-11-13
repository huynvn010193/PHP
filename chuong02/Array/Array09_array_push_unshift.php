<?php
	$courses = array("PHP","Zend","Joomla","ABC");
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	
	$soPhanTu = array_push($courses, "HTML","CSS");
	
	echo $soPhanTu; // => trả về số lượng phần tử là 6
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	
	$soPhanTu1 = array_unshift($courses, "HTML1","CSS1");
	
	echo $soPhanTu1; // => trả về số lượng phần tử là 6
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	
?>