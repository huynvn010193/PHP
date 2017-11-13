<?php
	$courses = array("PHP","Zend","Joomla","ABC");
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	// Đảo chiều các phần tử
	$newArr = array_reverse($courses);
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";
	
	// Hóa đổi key-> values và ngược lại
	$newArrFlip = array_flip($courses);
	
	echo "Dùng array_flip"."<br/>";
	echo "<pre>";
	print_r($newArrFlip);
	echo "</pre>";
?>