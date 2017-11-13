<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tìm xem tháng của năm có bao nhiêu ngày</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
	<div class="content">
		<h1>Tìm xem tháng của năm có bao nhiêu ngày</h1>
		<?php 
			$month = 2;
			$year = 2013;
			$timeStamp = mktime(0,0,0,$month,1,$year);
			$tongsongay = date('t',$timeStamp);
			echo $tongsongay;
		?>
	</div>
	
</body>
</html>