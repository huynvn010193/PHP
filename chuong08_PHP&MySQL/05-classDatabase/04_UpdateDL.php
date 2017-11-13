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
	

	$data = array(	'status' => '1',
					'ordering' => '103',
					'name' => 'Manager3');
	$where = array(
				array('status',1,'or'),
				array('ordering',10)
				//array('id',224)
			);
	
	echo $database->update($data, $where);
	
	