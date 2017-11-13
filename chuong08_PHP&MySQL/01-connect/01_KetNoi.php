<?php
	$connect = @mysqli_connect('localhost','root','');
	//  : mysql_connect trong php7 thay bằng hàm mysqli_connect
	// kiểm tra kết nối
	if(!$connect)
	{
		die('<h3>Fail</h3>');
	}
	echo "<h3>Success</h3>";
			
	// đóng kết nối
	mysqli_close($connect);
?>