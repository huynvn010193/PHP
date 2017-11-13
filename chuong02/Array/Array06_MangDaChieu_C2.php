<?php
	$students = array();
	
	$students = array(
		"SV01" => array(
			"name" => "Jonh",
			"sex"  => 1,
			"score"=> array(4,5,6) 		
		),
		"SV02" => array(
				"name" => "Peter",
				"sex"  => 1,
				"score"=> array(5,6,7)
		),
		"SV03" => array(
				"name" => "Marry",
				"sex"  => 0,
				"score"=> array(7,8,9)
		),
	);
	/*
	echo "<pre>";
	print_r($students);
	echo "</pre>";
	*/
	echo "tên sinh viên thứ 2 là: ".$students["SV02"]["name"] . "<br/>";
	
	echo "Điểm sinh viên thứ 2 là: ".$students["SV03"]["score"][1] ."<br/>";
	// Thay đổi
	$students["SV03"]["name"] = "Anne";
	$students["SV03"]["score"][1] = 10;
	
	echo "<pre>";
	print_r($students);
	echo "</pre>";
	
?>