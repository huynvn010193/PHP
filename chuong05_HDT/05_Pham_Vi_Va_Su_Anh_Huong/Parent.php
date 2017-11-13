<?php
	require_once 'Lion.class.php';
	$lion = new Lion("Lion", 3, "Brow","20kg");
	$lion -> showInfo();
	echo '<pre>';
	print_r($lion);
	echo '</pre>';
?>