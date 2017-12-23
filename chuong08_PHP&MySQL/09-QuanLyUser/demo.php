<?php
	require_once 'connect.php';
	echo "<pre>";
		print_r($database);
	echo "</pre>";

	// Kiểm tra 1 usename nào đó có tồn tại trong database hay không.
	$username = "nhathuy1";
	$query = "SELECT `username` FROM `user` WHERE `username` = '".$username."'";
	$checkExits = $database->isExist($query);
	if($checkExits)
	{
		echo "Tồn tại";
	}
	else
	{
		echo "Không tồn tại";
	}
?>