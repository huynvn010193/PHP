<meta charset="UTF-8">
<?php
	require_once 'Upload.class.php';
	$upload = new Upload('file-upload');
	
	$arrExtension = array('jpg');
	$upload -> setFileExtension($arrExtension);
	$upload -> setFileSize(102400, 5242880);
	$upload-> setUploadDir('./images/');
	
	if($upload->isVail() == false)
	{
		$upload->upload(true);
		echo "Up load thành công";
	}
	else 
	{
		$upload->showError();
	}
?>