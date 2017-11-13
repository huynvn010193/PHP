<?php
	require_once 'function.php';
	$configs = parse_ini_file('config.ini');
	$fileUpload = $_FILES['file-upload'];
	echo "<pre>";
		print_r($fileUpload);
	echo "</pre>";
	
	foreach ($fileUpload['name'] as $key => $value)
	{
		if($value != null)
		$fileName = randomString($value, 7);
		$flagSize = checkSize($fileUpload['size'][$key], $configs['min_size'], $configs['max_size']);
		$arrayExtension = explode('|',$configs['extension']);
		$flagExtension = checExtension($value,$arrayExtension);
		if($flagSize == true & $flagExtension == true)
		{
			@move_uploaded_file($fileUpload['tmp_name'][$key], './files/' .$fileName);
		}
	}
?>