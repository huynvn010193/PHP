<?php
	$connect = @mysql_connect('localhost','root','');
	//  : mysql_connect trong php7 thay bằng hàm mysqli_connect
	// kiểm tra kết nối
	if(!$connect)
	{
		die('<h3>Fail</h3>');
	}
	echo "<h3>Success</h3>";
	// Lấy danh sách database
	
	//$databases = mysqli_query('SHOW DATABASES');
	$databases = mysql_query('SHOW DATABASES');
	
	while($row = mysql_fetch_object($databases))
	{
		echo '<h3>'. $row->Database .'</h3>';
	}
	// đóng kết nối
	mysqli_close($connect);
?>