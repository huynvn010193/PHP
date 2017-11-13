<?php
	$courses = array("PHP","Zend","Joomla","ABC","ZYZ","Joomla","PHP");
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	
	unset($courses[0]);
	unset($courses[1]);
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
?>