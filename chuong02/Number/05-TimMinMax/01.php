<?php
	$arrNumber = array(1,-3,8.5,8.51,4,9);
	
	sort($arrNumber);
	
	$min = $arrNumber[0];
	$max = $arrNumber[count($arrNumber)-1];
	
	echo "Min: " .$min .'<br/>';
	echo "Max: " .$max .'<br/>';
	
	$sum = 0;
	foreach ($arrNumber as $value)
	{
		$sum += $value;
	}
	
	echo "Sum: " .$sum;
?>