<?php
	require_once 'function.php';
	$configs = parse_ini_file('config.ini');
	$fileUpload = $_FILES['file-upload'];
	$fileName = randomString($fileUpload['name'], 7);
	$flagSize = checkSize($fileUpload['size'], $configs['min_size'], $configs['max_size']);
	$arrayExtension = explode('|',$configs['extension']);
	$flagExtension = checExtension($fileUpload['name'],$arrayExtension);
	if($flagSize == true & $flagExtension == true)
	{
		@move_uploaded_file($fileUpload['tmp_name'], './files/' .$fileName);
	}
?>