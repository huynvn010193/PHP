<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Kết quả trắc nghiệm tính cách</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
	
		$data = file("question.txt") or die("Cannot read file");
		$point = 0;
		array_shift($data);
		
		$data2 = file("result.txt");
		array_shift($data2);
		$nd = "";
		
		if(!empty($_POST))
		{
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			foreach ($data as $key => $value)
				{
					$tmp = explode("|",$value);
					$id = $tmp[0];
					$point += $_POST[$id];
				}
			echo $point;
			
			foreach ($data2 as $key => $value)
			{
				$tmp1 = explode("|", $value);
				$min = $tmp1[0];
				$max = $tmp1[1];
				$content = $tmp1[2];
				
				if($point >= $min && $point <= $max)
				{
					$nd = $content;
					break;
				}
			}
		}
		else
		{
			echo "Chưa chọn gì cả";
		}
		
		
	?>
	<div class="content">
		<h1>Kết quả trắc nghiệm tính cách</h1>
		<p>
			<b>
				Tổng điểm kết quả trắc nghiệm tính cách của bạn là: <?php echo $point?>
			</b>
		</p>
		<p style="margin-top:10px;text-align:justify">
			<b>
				Kết quả trắc nghiệm tính cách<?php echo $nd?>
			</b>
		</p>
	</div>
</body>
</html>