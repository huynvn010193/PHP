<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Vòng lặp for</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<div class="content">
		<h1>Chép phạt</h1>
		<ul>
		<?php 
			for ($i = 1; $i <= 20;$i++)
			{
				echo "<li>Em hứa sẽ làm bài tập ở nhà đầy đủ</li>";
			}
		?>
		</ul>
	 </div>
</body>
</html>