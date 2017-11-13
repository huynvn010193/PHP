<?php
	//check file size
	function checkSize($size,$mizSize,$maxSize )
	{
		$flag = false;
		if($size >= $mizSize && $size <= $maxSize)
		{
			$flag = true;
		}
		return $flag;
	}
	//check file size extensions
	function checExtension($fileName,$arrExtension)
	{
		$ext = pathinfo($fileName,PATHINFO_EXTENSION);

		$flag = false;
		if(in_array(strtolower($ext), $arrExtension) == true)
		{
			$flag = true;
		}
		else
		{
			$flag = false;
		}
		return $flag;
	}
	
	function randomString($fileName , $length)
	{
		$ext = pathinfo($fileName,PATHINFO_EXTENSION);
		$arrCharacter = array_merge(range('A','Z'), range('a', 'z'),range(0,9));
		$arrCharacter = implode($arrCharacter, '');
		$arrCharacter = str_shuffle($arrCharacter);
	
		$result = substr($arrCharacter,0,$length) .'.' .$ext;
		return $result;
	}
	
?>