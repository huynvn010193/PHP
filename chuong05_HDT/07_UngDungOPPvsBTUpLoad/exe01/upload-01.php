<?php
	require_once 'function.php';
	
	$fileUpload = $_FILES['file-upload'];
	$fileName = randomString($fileUpload['name'], 7);
	$flagSize = checkSize($fileUpload['size'], 100*1024, 5*1024*1024);
	$flagExtension = checExtension($fileUpload['name'], array('jpg','png','mp3','zip'));
	if($flagSize == true & $flagExtension == true)
	{
		@move_uploaded_file($fileUpload['tmp_name'], './files/' .$fileName);
	}
?>