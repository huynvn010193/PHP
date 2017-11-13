<?php
	$courses  = array();
	
	$courses["php"] = "PHP";              //key = [php]
	$courses["zend"] = "Zend Frameword";
	$courses["Joomla"] = "Jomla";
	$courses[] = "Item 1";					//key = [0]
	$courses[] = "Item 2";					//key = [2]
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	
	echo $courses["zend"];
?>