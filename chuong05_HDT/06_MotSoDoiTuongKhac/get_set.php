]<?php
	require_once 'class/Cat2.class.php';
	$cat = new Cat2();
	$cat->name = "Mimi";
	$cat->age = 10;
	$cat->color = "white";
	
	
	//echo $cat->age ."<br/>";
	echo $cat->color;
	$cat -> showInfo();
	
?>