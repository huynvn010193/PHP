<?php
	$connect = @mysql_connect('localhost','root','');
	//  : mysql_connect trong php7 thay bằng hàm mysqli_connect
	// kiểm tra kết nối
	if(!$connect)
	{
		die('<h3>Fail</h3>');
	}
	echo "<h3>Success</h3>";
	$connect = @mysql_connect('localhost','root','');
	// danh sách table
	$table = mysql_list_tables('manage_user',$connect);
	
	while($row = mysql_fetch_array($table))
	{
		echo '<h3>' .$row[0] .'</h3>';
	}
	
	@mysqli_close($connect);
?>