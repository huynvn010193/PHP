<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lấy chòm sao</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
	$day = "";
	$month = "";
	$image = "";
	$name = "";
	$time = "";
	$flag = true;
	$result = "";
	if(isset($_POST["day"]) && isset($_POST["month"]))
	{
		$day = $_POST["day"];
		$month = $_POST["month"];
		if(is_numeric($day) && (is_numeric($month)))
		{
			/*
			* Capricorn 	23/12 - 19/01	Ma kết
			* Aquarius		20/01 - 19/02	Bảo Bình
			* Pisces		20/02 - 21/03	Song Ngư
			* Aries 		22/03 - 20/04	Bạch Dương
			* Taurus 		21/04 - 21/05	Kim Ngưu
			* Gemini		22/05 - 22/06	Song Tử
			* Cancer		23/06 - 23/07	Cự Giải
			* Leo			24/07 - 23/08	Sư Tử
			* Virgo		24/08 - 23/09	Xử Nữ
			* Libra		24/09 - 23/10	Thiên Xứng
			* Scorpio 		24/10 - 22/11	Hổ Cáp
			* Sagittarius	23/11 - 22/12	Nhân Mã
			*/
			
			switch ($month)
			{
				case 1:
					if($day <= 19)
					{
						$image = "capricorn";
						$name = "Ma kết";
						$time = "23/12 - 19/01";
					}
					if($day >= 20)
					{
						$image = "aquarius";
						$name = "Bảo Bình";
						$time = "20/01 - 19/02";
					}
					if($day<1 || $day > 31)
					{
						$flag = false;
					}
				break;
				case 2:
					if($day <= 19)
					{
						$image = "aquarius";
						$name = "Bảo Bình";
						$time = "20/01 - 19/02";
					}
					if($day >= 20)
					{
						$image = "pisces";
						$name = "Song Ngư";
						$time = "20/02 - 21/03";
					}
					if ($day<1 || $day > 29)
					{
						$flag = false;
					}
					break;
				case 3:
					if($day <= 21)
					{
						$image = "pisces";
						$name = "Song Ngư";
						$time = "20/02 - 21/03";
					}
					if($day >= 22)
					{
						$image = "aries";
						$name = "Bạch Dương";
						$time = "20/02 - 21/03";
					}
					if ($day<1 || $day > 31)
					{
						$flag = false;
					}
					break;
				case 4:
					if($day <= 20)
					{
						$image = "aries";
						$name = "Bạch Dương";
						$time = "20/02 - 21/03";
					}
					if($day >= 21)
					{
						$image = "taurus";
						$name = "Kim Ngưu";
						$time = "21/04 - 21/05";
					}
					if ($day<1 || $day > 30)
					{
						$flag = false;
					}
					break;
				case 5:
					if($day <= 21)
					{
						$image = "taurus";
						$name = "Kim Ngưu";
						$time = "21/04 - 21/05";
					}
					if($day >= 22)
					{
						$image = "gemini";
						$name = "Song Tử";
						$time = "22/05 - 22/06";
					}
					if ($day<1 || $day > 31)
					{
						$flag = false;
					}
					break;
				case 6:
					if($day <= 22)
					{
						$image = "gemini";
						$name = "Song Tử";
						$time = "22/05 - 22/06";
					}
					if($day >= 23)
					{
						$image = "cancer";
						$name = "Cự Giải";
						$time = "23/06 - 23/07";
					}
					if ($day<1 || $day > 30)
					{
						$flag = false;
					}
					break;
				case 7:
					if($day <= 23)
					{
						$image = "cancer";
						$name = "Cự Giải";
						$time = "23/06 - 23/07";
					}
					if($day >= 24)
					{
						$image = "leo";
						$name = "Sư Tử";
						$time = "24/07 - 23/08";
					}
					if ($day<1 || $day > 31)
					{
						$flag = false;
					}
					break;
				case 8:
					if($day <= 23)
					{
						$image = "leo";
						$name = "Sư Tử";
						$time = "24/07 - 23/08";
					}
					if($day >= 24)
					{
						$image = "virgo";
						$name = "Xử Nữ";
						$time = "24/08 - 23/09";
					}
					if ($day<1 || $day > 31)
					{
						$flag = false;
					}
					break;
				case 9:
					if($day <= 23)
					{
						$image = "virgo";
						$name = "Xử Nữ";
						$time = "24/08 - 23/09";
					}
					if($day >= 24)
					{
						$image = "libra";
						$name = "Thiên Xứ";
						$time = "24/09 - 23/10";
					}
					if ($day<1 || $day > 30)
					{
						$flag = false;
					}
					break;
				case 10:
					if($day <= 23)
					{
						$image = "libra";
						$name = "Thiên Xứ";
						$time = "24/09 - 23/10";
					}
					if($day >= 24)
					{
						$image = "scprpio";
						$name = "Hổ Cáp";
						$time = "24/10 - 22/11";
					}
					if ($day<1 || $day > 31)
					{
						$flag = false;
					}
					break;
				case 11:
					if($day <= 22)
					{
						$image = "scprpio";
						$name = "Hổ Cáp";
						$time = "24/10 - 22/11";
					}
					if($day >= 23)
					{
						$image = "sagittarius";
						$name = "Nhân Mã";
						$time = "23/11 - 22/12";
					}
					if ($day<1 || $day > 30)
					{
						$flag = false;
					}
					break;
				case 12:
					if($day <= 22)
					{
						$image = "sagittarius";
						$name = "Nhân Mã";
						$time = "23/11 - 22/12";
					}
					if($day >= 23)
					{
						$image = "capricorn";
						$name = "Ma kết";
						$time = "23/12 - 19/01";
					}
					if ($day<1 || $day > 31)
					{
						$flag = false;
					}
					break;
				default:
					$flag = false;
				break;
			}
		}
		else
		{
			$flag = false;
		}
		if($flag == true)
		{
			$result = '<div class="result">
			 	<img src="images/' .$image. '.jpg" alt="' .$image. '" />
			 	<p>' .$name. '<span>(' .ucfirst($image). ' : ' .$time. ')</span></p>
		 		</div>';
			// ucfirst : chuyển chữ cái đầu tiên thành chữ hoa
		}
		else
		{
			$result = "Dữ liệu không hợp lệ";
		}
	}
?>
	<div class="content">
		<h1>Lấy chòm sao</h1>
	 	<form action="#" method="post" name="main-form">
	 		<div class="row">
	 			<span>Ngày sinh:</span>
	 			<input type="text" name="day" value="<?php echo $day?>"/>
	 		</div>
	 		<div class="row">
	 			<span>Tháng sinh:</span>
	 			<input type="text" name="month" value="<?php echo $month?>"/>
	 		</div>
	 		<div class="row">
	 			<input type="submit" value="Lấy chòm sao" name="submit"/>
	 		</div>
	 	</form>
	 	
	 	<?php
	 	
	 	echo $result;
	 	?>
	</div>
</body>
</html>