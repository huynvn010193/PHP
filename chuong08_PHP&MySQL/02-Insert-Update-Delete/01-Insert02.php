<?php
	$connect = @mysql_connect('localhost','root','');
	if(!$connect)
	{
		die('<h3>Fail</h3>');
	}
	
	//INSERT dữ liệu vào Database
	
	mysql_select_db('manage_user');
	
	$arrData = array(
			'name' => 'Member 123',
			'status' => 0,
			'ordering' => 9
		);
	
	function createInsertSQL($data)
	{
		$newQuery = array();
		$cols = "";
		$vals = "";
		if(!empty($data))
		{
			foreach($data as $key => $value)
			{
				$cols .= ", `$key`";
				$vals .= ", '$value'"; // 
			}
		}
		$newQuery['cols'] = substr($cols, 2);
		$newQuery['vals'] = substr($vals, 2);
		return $newQuery;
	}
	
	
	
	$newQuery = createInsertSQL($arrData);
	
	echo $sql = "INSERT INTO `group`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";
	
	
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