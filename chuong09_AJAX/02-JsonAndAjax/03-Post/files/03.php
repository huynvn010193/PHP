<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$message = array();
	if(empty($username))
	{
		$message['username'] = 'Username không được rỗng';
	}
	else if($username != 'nhathuy')
	{
		$message['username'] = 'Username không tồn tại';
	}
	
	if(empty($password))
	{
		$message['password'] = 'Password không được rỗng';
	}
	else if($password != 'nhathuy')
	{
		$message['password'] = 'Password không tồn tại';
	}
	
	$status = 'error';
	if(count($message) == 0)
	{
		$status = 'success';
	}
	
	$reponse = array(
				'status' => $status,
				'message' => $message
			);
	echo $jsonString = json_encode($reponse);
?>