<?php
	require_once 'class/Cat3.class.php';
	$cat = new Cat3();
	$cat->name = "Mimi";
	$cat->age = 10;
	$cat->color = "white";
	
	
	//echo $cat->age ."<br/>";
	echo "<pre>";
		print_r($cat);
	echo "</pre>";
	
	echo $cat->name;
	
?>