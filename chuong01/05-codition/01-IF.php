<meta charset="UTF-8">
<?php
	$number = 20;
	if($number % 2 == 0)
	{
		echo "Số chẵn";
	}
	
	$result = ($number % 2 == 0)? "Số chẵn":"Số âm";
	echo "<br/>" .$result;
?>