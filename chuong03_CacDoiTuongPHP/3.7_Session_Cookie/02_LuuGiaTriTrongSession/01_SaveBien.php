<?php
	$variable = "This is String";
	
	session_start();
	
	$_SESSION['variable'] = $variable;
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
?>