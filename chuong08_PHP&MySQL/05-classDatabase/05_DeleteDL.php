<?php
	require_once 'Database.class.php';
	$params = array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'manage_user',
		'table'	   => 'group'	
	);
	
	$database = new Database($params);
	
	$ids = array(224,225);
	
	echo $database->delete($ids);
	
	