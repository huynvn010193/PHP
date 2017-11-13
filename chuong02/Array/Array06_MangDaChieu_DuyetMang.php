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
	
	if(!empty($students))
	{
		foreach ($students as $key => $value)
		{
			$name = $value["name"];
			$sex = $value["sex"];
			$score = $value["score"];
			$total = 0;
			$total = array_sum($score);
			/*
			for($i = 0; $i < count($score); $i++)
			{
				$total += $score[$i];	
			}
			*/
			
			
			echo "Name: ". $name . "Giới Tính: ".$sex ."Tổng điểm: " .$total ."<br/>";
		}
	}
	
?>