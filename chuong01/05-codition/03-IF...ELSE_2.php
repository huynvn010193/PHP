<meta charset="UTF-8">
<?php
	$number = -11;
	if($number >= 0 && $number % 2 == 0)
	{
		$result = "Nguyên dương chẵn";
	}
	else if ($number >= 0 && $number % 2 ==1)
	{
		$result = "Nguyên dương lẻ";
	}
	else if ($number < 0 && $number % 2 == 0)
	{
		$result = "Nguyên âm chẵn";
	}
	else
	{
		$result = "Nguyên âm lẻ";
	}
	echo $result;
?>