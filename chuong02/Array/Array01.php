<?php
	$php = "PHP";
	$zend = "ZEND Frameword";
	$joomla = "Jomla";
	
	$course = array();
	$course[] = $php;
	$course[] = $zend;
	$course[] = $joomla;
	// đếm số phần tử trong mảng
	$lenght = count($course);
	echo $lenght;
	// cách 1
	if($lenght > 0)
	{
		echo "Không là mảng rỗng";		
	}
	else 
	{
		echo "Là mảng rỗng";
	}
	
	// cách 2
	
?>