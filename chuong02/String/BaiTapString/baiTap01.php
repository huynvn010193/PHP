<?php
	$url 	= "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";
	
	function getInfo01()
	{
		$info = explode("/", $url);
		$result = $info[count($info)-1];
		return $result;
	}
	
	function getInfo02()
	{
		$parseURL = parse_url($url);
		$info = explode("/", $parseURL["path"]);
		$result = $info[count($info) - 1];
		return  $result;
	}
	function getInfo03($url)
	{
		// trả về vị trí cuối cùng của ký tự trong chuỗi
		$index = strripos($url,"/");
		$result = substr($url, $index+1);
		return $result;
	}
	
	function format($str)
	{
		$result = $str[0];
	
		for($i = 1; $i < strlen($str); $i++)
		{
			if(ctype_upper($str[$i]) == true)
			{
				$result .= " " . $str[$i];
			}
			else
			{
				$result .= $str[$i];
			}
		}
		return $result;
	}
	
	
	$info = getInfo03($url);
	$arrayInfo = explode("_", $info);
	
	$result = array();
	$result["ID"] = $arrayInfo[0];
	$arrayType = explode(".", $arrayInfo[3]);
	$result["type"] = $arrayType[1];
	
	$arrayInfo[3] = $arrayType[0];
	
	echo "<pre>";
	print_r($arrayInfo);
	echo "</pre>";
	
	$result["bai hat"] = format($arrayInfo[1]);
	$result["abulm"]= format($arrayInfo[2]);
	$result["Singer"] 	= 	format($arrayInfo[3]);
	
	echo "<pre>";
	print_r($result);
	echo "</pre>";
	
	
	
?>