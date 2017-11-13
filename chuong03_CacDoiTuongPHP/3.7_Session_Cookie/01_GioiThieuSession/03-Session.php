<?php
	session_start();
	
	$name = $_SESSION['name'] = 'Nguyen Van B';
	
	echo $name;
	