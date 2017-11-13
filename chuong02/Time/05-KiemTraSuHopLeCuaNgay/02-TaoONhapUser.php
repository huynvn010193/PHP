<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Thao tac với ngày tháng</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		// In số từ 1 đến 31
		$arrDay = range(1, 31);
		$arrMonth = range(1,12);
		$arrYears = range(1970, 2017);
		function createSelectBox($arrData,$name, $keySelected)
		{
			$strString = '';
			if(!empty($arrData))
			{
				$strString .= '<select name="'.$name.'">';
				foreach ($arrData as $key=> $value):
					if($keySelected == $key)
					{
						$strString .='<option value="'.$key.'" selected = "true">'.$value.'</option>';
					}
					else
					{
						$strString .='<option value="'.$key.'">'.$value.'</option>';
					}
				endforeach;
				$strString .= '</select>';
			}
			return $strString;
		}
		
		$days = (isset($_POST['days-select'])) ? $_POST['days-select'] : 0;
		$months = (isset($_POST['months-select'])) ? $_POST['months-select'] : 0;
		$years = (isset($_POST['years-select'])) ? $_POST['years-select'] : 0;
		
		$strDays = createSelectBox($arrDay, "days-select",$days);
		$strMoths = createSelectBox($arrMonth, "months-select",$months);
		$strYears = createSelectBox($arrYears, "years-select",$years);
	?>
	<div class="content">
		<h1>Thao tác với thời gian</h1>
		<form action="#" method="post" id="mainForm" name="mainForm">
			<div class="row">
				<span>Ngày</span>
				<?php 
					echo $strDays;
				?>
			</div>
			<div class="row">
				<span>Tháng</span>
				<?php 
					echo $strMoths;
				?>
			</div>
			<div class="row">
				<span>Năm</span>
				<?php 
					echo $strYears;
				?>
			</div>
			<div class='row'>
				<input type="submit" value="Check Date"/>
			</div>
			<div class='resutl'>
				
				<?php echo "Ngày được chọn: $arrDay[$days]/$arrMonth[$months]/$arrYears[$years] <br/>";
				if(checkdate($arrDay[$days],$arrMonth[$months],$arrYears[$years]))
				{
					echo "Ngày hợp lệ";
				}
				else
				{
					echo "Ngày không hợp lệ";
				}
				?>
			</div>
		</form>
	</div>
	
</body>
</html>