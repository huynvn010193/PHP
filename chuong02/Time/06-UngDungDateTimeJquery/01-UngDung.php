<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>UngDungNgay</title>
<link rel="stylesheet" href="../css/jquery-ui.css" />
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
	<?php
		echo "<pre>";
			print_r($_POST);
		echo "</pre>";
		$date = (isset($_POST["datepicker"])) ? $_POST["datepicker"] : "";
	?>
	<form action="#" method="post" name="mainForm" id="mainForm">
		<p>Date: <input readonly="readonly" type="text" id="datepicker" name="datepicker" value="<?php echo $date?>"></p>
		<input type="submit" value="Submit" />
	</form>
	
</body>
</html>