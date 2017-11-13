<?php
	$courses = array("PHP","Zend","Joomla");
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	
	// loại bỏ phần tử đầu
	$lastItem = array_pop($courses);
	echo $lastItem ."</br>";
	
	// loại bỏ phần tử cuối
	$firstItem = array_shift($courses);
	echo $firstItem ."</br>";
	
	//Mảng sau khi loại bỏ
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
?>