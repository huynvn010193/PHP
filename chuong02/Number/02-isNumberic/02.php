<?php
	$number = "02,000,000";
	// Thay đổi ký tự trong 1 chuỗi. => ký tự "," thành ký tự rỗng
	
	$number = str_replace(',', '', $number);
	if(is_numeric($number))
	{
		echo $number ." is Number";
	}
	else 
	{
		echo $number ." is Not Number";
	}
?>