<?php 
	require_once 'connect.php';
	
	$query[] = "SELECT `g`.`id`, `g`.`name`, `g`.`status`,`g`.`ordering`, COUNT(`u`.`id`) AS total";
	$query[] = " FROM `group` AS `g` LEFT JOIN `user` AS `u` ON `g`.`id` = `u`.`group_id`";
	$query[] = " GROUP BY `g`.`id`";
	$query = implode(" ", $query);
	
	$list = $database->listRecord($query);
	$xhtml = "";
	if(!empty($list))
	{
		$i = 0;
		foreach ($list as $item)
		{
			$row = ($i % 2 == 0) ? 'odd':'even';
			$id = $item['id'];
			$status = ($item['status'] == 0) ? 'Inactive':'Active';
			$xhtml .= '<div class="row '.$row.'">
	            	<p class="no">
						<input type="checkbox" name="checkbox[]" value="'.$id.'"/>
					</p>
	                <p class="name">'.$item['name'].'</p>
	                <p class="id">'.$id.'</p>
	                <p class="size">'.$status.'</p>
	                <p class="size">'.$item['ordering'].'</p>
	                <p class="size">'.$item['total'].'</p>
	                <p class="action">
	                	<a href="edit.php?id='.$id.'">Edit</a> |
	                	<a href="delete.php?id='.$id.'">Delete</a>
	                </p>
	            </div>';
			$i++;
		}
	}
	else
	{
		$xhtml .= "Dữ liệu đang cập nhật";
	}
	
	//MULTY DELETE
	
	$messageDelete = "";
	if(isset($_POST["token"])){
		$checkbox	= $_POST['checkbox'];
		if(!empty($checkbox))
		{
			$total = $database->delete($checkbox);
			$messageDelete = "<div class='success'>Có ".$total." dòng đã xóa</div>";
		}
		else
		{
			$messageDelete = "<div class='notice'>Bạn vui lòng chọn vào các dòng muốn xóa!</div>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Manage User</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/my-js.js"></script>
</head>
<body>
	<div id="wrapper">
    	<div class="title">Manage Group</div>
        <div class="list">
        	<?php echo $messageDelete?>
			<form action="#" method="post" name="main-form" id="main-form">
	         	
	         	<div class="row" style="text-align:center; font-weight:bold;">
	            	<p class="no">
						<input type="checkbox" name="check-all" id="check-all"/>
					</p>
	                <p class="name">Group Name</p>
	                <p class="id">Id</p>
	                <p class="size">Status</p>
	                <p class="size">Ordering</p>
	                <p class="size">Member</p>
	                <p class="action">Action</p>
	            </div>
	            <input type="hidden" value="<?php echo time();?>" name="token"/>
				<?php 
					echo $xhtml;
				?>
	    	</form>
    	</div>
        
	        <div id="area-button">
	        	<a href="add.php">Add Group</a>
	        	<a id="multy-delete" href="#">Delete Group</a>
	        </div>
    
    </div>
</body>
</html>
