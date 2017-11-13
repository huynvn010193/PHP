<?php
	$students = array();
	$students["SV01"] = array(
		"name" 	=> "Jonh",
		"sex" 	=> 1,
		"score" => array(4,5,6)		
	);
	$students["SV02"] = array(
			"name" 	=> "Peter",
			"sex" 	=> 1,
			"score" => array(5,6,7)
	);
	$students["SV03"] = array(
			"name" 	=> "Marry",
			"sex" 	=> 0,
			"score" => array(7,8,9)
	);
	
	echo "<pre>";
	print_r($students);
	echo "</pre>";
?>