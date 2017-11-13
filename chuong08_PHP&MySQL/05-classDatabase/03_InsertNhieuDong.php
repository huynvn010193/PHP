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
	

	$arrData = array(
		array('name' => 'User 4','status' => 0,'ordering' => 10),
		array('name' => 'User 5','status' => 0,'ordering' => 10),
		array('name' => 'User 6','status' => 0,'ordering' => 9),
		array('name' => 'User 7','status' => 0,'ordering' => 9)
	);
	
	echo $lastID = $database->insert($arrData,"multy");
	
	