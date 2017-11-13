<?php
	$connect = @mysql_connect('localhost','root','');
	if(!$connect)
	{
		die('<h3>Fail</h3>');
	}
	
	//INSERT dữ liệu vào Database
	
	mysql_select_db('manage_user');
	$sql = "INSERT INTO `group`(`name`,`status`,`ordering`) VALUES 
						('Member','1','10'),('Member1','2','20')";
	$result = mysql_query($sql);
	
	if($result == true)
	{
		echo $total = mysql_affected_rows(); 
	}
	else
	{
		//echo "Fail";
		echo mysql_error();
	}
	mysql_close($connect);
?>