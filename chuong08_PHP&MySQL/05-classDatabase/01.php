<?php
	require_once 'Database.class.php';
	$params = array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'manager_user',
		'table'	   => 'group'	
	);
	
	$database = new Database($params);
	echo "<pre>";
		print_r($database);
	echo "</pre>";
	
	