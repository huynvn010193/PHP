<?php
	$courses = array("PHP","Zend","Joomla","ABC","ZYZ","Joomla","PHP");
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	
	$newArr = array_unique($courses);
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";
?>