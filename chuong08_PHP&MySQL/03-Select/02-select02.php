<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Câu lệnh Select</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="wrapper">
    	<div class="title">PHP & MySQL - Select</div>
        <div class="list">   
        	<div class="row header">
            	<p class="no">No</p>
                <p class="name">Group Name</p>
                <p class="status">Status</p>
                <p class="ordering">Ordering</p>
                <p class="ordering">Member</p>
                <p class="id">ID</p>
            </div>
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
	
	$query2[] = "SELECT `g`.`id`, `g`.`name`, `g`.`status`,`g`.`ordering`, COUNT(`u`.`id`) AS total";
	$query2[] = " FROM `group` AS `g` LEFT JOIN `user` AS `u` ON `g`.`id` = `u`.`group_id`";
	$query2[] = " GROUP BY `g`.`id`";
	
	$query2 = implode(" ", $query2);

	$result = mysql_query($query2);
	$i = 1;
	$xhtml = "";
	
	if(mysql_num_rows($result) > 1)
	{
		while($row = mysql_fetch_assoc($result))
		{
			if($i % 2 == 0)
			{
				$class = "odd";
			}
			else
			{
				$class = "even";
			}
			// cach 2: $class = ($i % 2 == 0) ? "odd" : "even";
		
			$status = ($row['status'] == 0) ? "Inactive":"Active";
			$xhtml .= '<div class="row '.$class.'">
	            <p class="no">'.$i.'</p>
	            <p class="name">'.$row['name'].'</p>
	            <p class="status">'.$status.'</p>
	            <p class="ordering">'.$row['ordering'].'</p>
				<p class="ordering">'.$row['total'].'</p>
	            <p class="id">'.$row['id'].'</p>
         	</div>';
			$i++;
		}
		echo $xhtml;
	}
	else
	{
		echo "Data empty";
	}
	
	mysql_close($connect);
?>
          
		 </div>
    </div>
</body>

</html>