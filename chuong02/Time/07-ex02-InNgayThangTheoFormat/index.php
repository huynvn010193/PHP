<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Làm việc với thời gian</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
	<div class="content">
		<h1>Làm viêc với thời gian</h1>
		<?php 
			$result = date('h:i A D,d/m/y',time());
			$arrEN = array('Mon','Tue','Wed','Thu','Fri','Sat','Sun');
			$arrVI = array('Thứ 2','Thứ 3','Thứ 4','Thứ 5','Thứ 6','Thứ 7','Chủ nhật');
			$result = str_replace($arrEN, $arrVI, $result);
			$result = str_replace(',', ', ngày ', $result);
			echo $result;
		?>
	</div>
	
</body>
</html>