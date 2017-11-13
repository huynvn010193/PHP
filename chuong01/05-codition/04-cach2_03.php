<meta charset="UTF-8">
<?php
	$number = 22;
	$n = $number % 2;
	$resultFirst = ($number >= 0)? "Số nguyên dương":"Số nguyên âm";
	$resultLast = ($n == 0)? "Chẵn" : "Lẻ";
	$result = $resultFirst ." " .$resultLast;
	echo $result;
	
?>