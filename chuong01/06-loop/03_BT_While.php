<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Vẽ tam giác</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<div class="content2">
		<h1>Vẽ tam giác</h1>
		<ul>
			<Li>
				<a href="03_BT_While.php?type=1">
					<img src="images/01.png"/>
				</a>
			</Li>
			<Li>
				<a href="03_BT_While.php?type=2">
					<img src="images/02.png"/>
				</a>
			</Li>
			<Li>
				<a href="03_BT_While.php?type=3">
					<img src="images/03.png"/>
				</a>
			</Li>
		</ul>
		<div class="result">
		 	<?php
		 	//echo str_repeat("0", 10); // hàm hỗ trợ số lần lặp (giá trị cần lặp, số lần lặp)
		 	$result = "";
		 		if(isset($_GET["type"]))
		 		{
		 			$type = $_GET["type"];
		 			$n = 6;
		 			$i = 1;
		 			switch ($type)
		 			{
		 				case 1:
		 					while($i <= $n)
		 					{
		 						
		 						$result .= str_repeat("*", $i) ."<br/>";
		 						$i++;
		 					}
		 					break;
		 					
		 				case 2:
		 					while($n >= $i)
		 					{
		 							
		 						$result .= str_repeat("*", $n) ."<br/>";
		 						$n--;
		 					}
		 					break;
		 					
		 				case 3:
		 					$n = 6;
		 					$i = 1;
		 					while($i <= $n)
		 					{
		 						$space = str_repeat("&nbsp;&nbsp;", $n - $i);
		 						$character = str_repeat("*", 2*$i - 1); 
		 						$result .= $space .$character ."<br/>";
		 						$i++;
		 					}
		 					break;
		 			}
		 		}
		 		echo $result;
		 	?>
	 	</div>
	 </div>
	 
</body>
</html>