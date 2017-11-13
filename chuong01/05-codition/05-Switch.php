<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mô phỏng máy tính điện tử</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
	$n1 = 		"";
	$n2 =		"";
	$pheptoan = "";
	$flag = false;
	$result = "Chưa nhập phép toán";
	
	if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["calculate"]))
	{
		$n1 = $_POST["number1"];
		$n2 = $_POST["number2"];
		$pheptoan = $_POST["calculate"];
		if(is_numeric($n1) && is_numeric($n2))
		{
			$flag = true;
			switch($pheptoan)
			{
				case "+":
					$result = $n1 + $n2;
					break;
				case "-":
					$result = $n1 - $n2;
					break;
				case "*":
				case "x":
					$result = $n1 * $n2;
					break;
				case "/":
				case ":":
					$result = $n1 / $n2;
					break;
				case "%":
					$result = $n1 % $n2;
					break;
				default:
					$result = $n1 + $n2;
					$pheptoan = "+";
					break;
			}
		}
		else
		{
			$flag = false;
			$result = "Không thực hiện được";	
		}
		
	}
?>
	<div class="content">
		<h1>Mô phỏng máy tính điện tử</h1>
	 	<form action="#" method="post" name="main-form">
	 		<div class="row">
	 			<span>Số thứ 1:</span>
	 			<input type="text" name="number1" value="<?php echo $n1?>"/>
	 		</div>
	 		<div class="row">
	 			<span>Phép toán:</span>
	 			<input type="text" name="calculate" value="<?php echo $pheptoan?>"/>
	 		</div>
	 		<div class="row">
	 			<span>Số thứ 2:</span>
	 			<input type="text" name="number2" value="<?php echo $n2?>"/>
	 		</div>
	 		<div class="row">
	 			<input type="submit" value="Xem kết quả" name="submit"/>
	 		</div>
	 		<div class="row">
	 			<p>
	 			<?php 
	 				if($flag == true)
	 				{
	 					echo "Kết quả là: " .$n1 ." " .$pheptoan . " " .$n2 . "=" .$result;
	 				}
	 				else
	 				{
	 					echo $result;
	 				}
	 			?>
	 			</p>
	 		</div>
	 	</form>
	</div>
</body>
</html>