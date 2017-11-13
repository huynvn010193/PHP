<?php
	$connect = @mysql_connect('localhost','root','');
	if(!$connect)
	{
		die('<h3>Fail</h3>');
	}
	
	// Update 
	mysql_select_db('manage_user');
	
	function createUpdateSQL($data)
	{
		$newQuery = "";
		if(!empty($data))
		{
			foreach ($data as $key => $value)
			{
				$newQuery .= ", `$key` = '$value'";
			}
		}
		$newQuery = substr($newQuery, 2);
		return $newQuery;
	}
	
	$data = array(	'status' => '1',
					'ordering' => '100',
					'name' => 'Manager1');
	$newQuery = createUpdateSQL($data);
	
	$sql = "UPDATE `group` SET ".$newQuery." WHERE `id` = 211";
	
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