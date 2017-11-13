<?php
	$connect = @mysql_connect('localhost','root','');
	if(!$connect)
	{
		die('<h3>Fail</h3>');
	}
	
	// Update 
	mysql_select_db('manage_user');
	
	$sql = "UPDATE `group` SET `status` = '1'
			WHERE `ordering` = 9";
	
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