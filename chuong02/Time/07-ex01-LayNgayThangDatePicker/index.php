<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>UngDungNgay</title>
<link rel="stylesheet" href="../css/jquery-ui.css" />
<link rel="stylesheet" href="../css/style.css" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>

<script>
  	$( function() {
    	$("#datepicker").datepicker({
			dateFormat:"dd/mm/yy",
			changeYear: true,
			yearRange: "2000:2017",
			changeMonth: true
        });
  	});
  </script>
</head>
<body>
	<div class="content">
		<h1>Exercise-01-Date</h1>
		<?php
			$date = (isset($_POST["datepicker"])) ? $_POST["datepicker"] : "";
		?>
		<form action="#" method="post" name="mainForm" id="mainForm">
			<div class="row">
				<span> Date: </span>
				<input readonly="readonly" type="text" id="datepicker" name="datepicker" value="<?php echo $date?>"></p>
				<div class="row">
				<input type="submit" value="Submit" />
				</div>
			</div>
		</form>
		<div class="result">
			<?php 
				echo 'Input: ' .$date . '<br/>';
				$dateArr = date_parse_from_format('d/m/Y', $date);
				$timeStame = mktime(0,0,0,$dateArr['month'],$dateArr['day'],$dateArr['year']);
				echo 'Output: ' .date('d-m-Y',$timeStame);
			?>
		</div>
	</div>
	
	
</body>
</html>