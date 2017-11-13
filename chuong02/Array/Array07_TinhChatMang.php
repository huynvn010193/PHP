<?php
	$courses = array("php" => "PHP","zend" => "Zend Frameword","Joomla");
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	
	$newArrValue = array_values($courses);
	echo "<pre>";
	print_r($newArrValue);
	echo "</pre>";
	
	$newArrKey = array_keys($courses);
	echo "<pre>";
	print_r($newArrKey);
	echo "</pre>";
?>