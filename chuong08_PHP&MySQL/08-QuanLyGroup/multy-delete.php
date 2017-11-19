<?php 
	
		
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP FILE</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>
<body>
<?php
	require_once 'connect.php';
	$checkbox	= $_POST['checkbox'];
	if(!empty($checkbox)){
		$total = $database->delete($checkbox);
	}
	$result = '<p>'.$total.' dòng dữ liệu đã bị xóa! Click vào <a href="index.php">đây</a> đê quay về trang chủ.</p>  ';
?>
	<div id="wrapper">
    	<div class="title">PHP FILE</div>
        <div id="form">   
       		 <?php echo $result?>
        </div>
    </div>
</body>
</html>
