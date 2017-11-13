<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>SlideAnh</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="content3">		
		<h1>Slide Ảnh</h1>
		<div class="image">
		<?php
			$i = 1; 
			do 
			{
				echo '<img src="images/nature-0'.$i.'.jpg"/>';
				$flagShow = 0;
				if(isset($_GET["show"]))
				{
					$flagShow = $_GET["show"];
					$i++;
				}
			}while($i <= 4 && $flagShow == 1);
		?>
			
			<a href="05_BT_DoWhile.php?show=1">Show All</a>
		</div>		
	</div>
</body>
</html>