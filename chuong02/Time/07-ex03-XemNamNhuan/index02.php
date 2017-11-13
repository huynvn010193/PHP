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
			
			$year = 2013;
			$checkYear = checkdate(2, 29, $year);
			// Kiểm tra xem ngày 29 tháng 2 có tồn tại trong năm không
			if($checkYear)
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