<meta charset="UTF-8">
<?php
	$connect = @mysql_connect('localhost','root','');
	if(!$connect)
	{
		die('<h3>Fail Connect</h3>');
	}
	mysql_select_db('manage_user');
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER SET 'utf8'");
	
	$query = "SELECT * FROM `group`";
	$query .=" ORDER BY `ordering` ASC";
	
	$id = $_GET['id'];
	if(is_numeric($id))
	{
		echo $query = "SELECT * FROM `group` WHERE id = '".$id."' ";
		
		$result = mysql_query($query);
		
		while ($row = mysql_fetch_assoc($result))
		{
			echo "<pre>";
			print_r($row);
			echo "</pre>";
		}
	}
	
	mysql_close($connect);
?>