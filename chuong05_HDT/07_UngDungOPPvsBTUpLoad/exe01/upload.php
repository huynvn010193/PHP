<?php
	$fileUpload = $_FILES['file-upload'];
	echo '<pre>';
	print_r($fileUpload);
	echo '</pre>';
	
	//---Hàm ramdo tên file-//
	function randomString($length = 5)
	{
		$arrCharacter = array_merge(range('A','Z'), range('a', 'z'),range(0,9));
		$arrCharacter = implode($arrCharacter, '');
		$arrCharacter = str_shuffle($arrCharacter);
		
		$result = substr($arrCharacter,0,$length);
		return $result;
	}
	
	
	if($fileUpload['name'] != null)
	{
		$filename = $fileUpload['tmp_name'];
		$random = randomString(6);
		$destination = './files/' .$random .$fileUpload['name'];
		//move_uploaded_file($filename, $destination);
		if(copy($filename,$destination))
		{
			echo 'Success';
		}
	}
	
?>