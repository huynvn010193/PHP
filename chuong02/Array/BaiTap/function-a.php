<?php
	$data = file("question.txt") or die("Can not read file");
	
	array_shift($data);
	
	$arrayQuestion = array();
	foreach($data as $key => $value)
	{
		
		$tmp = explode("|", $value);
		$id = $tmp[0];
		$question = $tmp[1];
		$arrayQuestion[$id] = array("question" => $question);	
	}
	
	
?>