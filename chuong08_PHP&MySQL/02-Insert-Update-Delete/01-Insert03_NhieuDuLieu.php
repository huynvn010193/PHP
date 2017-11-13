<?php
	$connect = @mysql_connect('localhost','root','');
	if(!$connect)
	{
		die('<h3>Fail</h3>');
	}
	
	//INSERT dữ liệu vào Database
	
	mysql_select_db('manage_user');
	
	$arrData = array(
			array('name' => 'Admin 4','status' => 0,'ordering' => 10),
			array('name' => 'Admin 5','status' => 0,'ordering' => 10),
			array('name' => 'Admin 6','status' => 0,'ordering' => 9),
			array('name' => 'Admin 7','status' => 0,'ordering' => 9)
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
	
	
	foreach ($arrData as $value)
	{
		$newQuery = createInsertSQL($value);
		$sql = "INSERT INTO `group`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";
		$result = mysql_query($sql);
		if($result == true)
		{
			echo $total = mysql_affected_rows() ."<br/>";
		}
		else
		{
			//echo "Fail";
			echo mysql_error() ."<br/>";
		}
	}
	mysql_close($connect);
?>