<?php
	require_once 'class/Cat.class.php';
	$catA = new Cat("Mimi");
	$catA -> showInfo();
	
	$strCatA = serialize($catA);
	echo "<br/>" . $strCatA;
	
	$objCatA = unserialize($strCatA);
	//echo "<br/>" . $objCatA;
	echo "<pre>";
		print_r($objCatA);
	echo "</pre>";
	
?>