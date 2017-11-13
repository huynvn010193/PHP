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
			$i = 21;
				do
				{
				echo "<li>Em hứa sẽ làm bài tập ở nhà đầy đủ</li>";
				$i++;
				}while($i <= 10);
		?>
		</ul>
	 </div>
</body>
</html>