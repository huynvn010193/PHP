<?php
	$mang  = array("PHP","Zend","Joomla");
	
	echo "<pre>";
	print_r($mang);
	echo "</pre>";
	
	if(!empty($mang))
	{
		foreach ($mang as $key => $value)
		{
			echo $value ."</br>";		
		}
	}
	
?>