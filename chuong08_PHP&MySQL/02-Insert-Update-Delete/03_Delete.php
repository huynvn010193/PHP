<?php
	$connect = @mysql_connect('localhost','root','');
	if(!$connect)
	{
		die('<h3>Fail</h3>');
	}
	
	// Delete 
	mysql_select_db('manage_user');
	
	$ids = array(213,214);
	//echo $ids = implode(",", $ids);
	$deleteID= "";
	foreach ($ids as $id)
	{
		$deleteID .= "'" .$id. "', ";	
	}
	$deleteID .= "'0'";
	$query = "DELETE FROM `group` WHERE `id` IN (".$deleteID.")";
	
	$result = mysql_query($query);
	if($result == true)
	{
		echo $total = mysql_affected_rows();
	}
	else
	{
		echo mysql_error();
	}
	
	mysql_close($connect);
?>