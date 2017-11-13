<?php
	//c1
	/*
	$courses  = array();
	
	$courses["php"] = "PHP";              //key = [php]
	$courses["zend"] = "Zend Frameword";
	$courses["Joomla"] = "Jomla";
	$courses[] = "Item 1";					//key = [0]
	$courses[] = "Item 2";					//key = [2]
	
	*/
	// c2
	$courses = array("php" => "PHP","zend" => "Zend Frameword","Joomla" => "Jomla",0 => "Item 1",1 =>"Item 2");	
	
	
	if(!empty($courses))
	{
		foreach ($courses as $key => $value)
		{
			echo $key . "=>" .$value ."</br>";
		}		
	}
	
	
	
	
	
?>