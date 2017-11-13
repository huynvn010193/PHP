<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Làm việc với năm Nhuận</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
	<div class="content">
		<h1>Làm viêc với thời gian</h1>
		<?php
			// Giải thuật năm Nhuận: 
			// n chia hết cho 400 hoặc (n chia hết 4 và không chia hết cho 100)
			function testLeapYear($year)
			{
				$flag = false;
				if(($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0))
				{
				 $flag = true;
				}
				return $flag;
			}
			$year = 2012;
			if(testLeapYear($year))
			{
				echo "Năm nhuận";
			}
			else
			{
				echo "Không là năm nhuận";
			}
		?>
	</div>
	
</body>
</html>