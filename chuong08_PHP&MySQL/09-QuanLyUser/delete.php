<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Delete User</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/my-js.js"></script>
</head>
<body>
<?php
	require_once 'connect.php';
	$id	= $_GET['id']; 
	$query  = "SELECT `u`.`id`,CONCAT(`u`.`firstname`,' ',`u`.`lastname`) AS fullname, `u`.`username`,`u`.`email`,
				`u`.`birthday`,`u`.`status`,`u`.`ordering`,`u`.`address` FROM `user` AS `u` WHERE `id` = '$id'";
	$item = $database->singleRecord($query);
	if(!empty($item))
	{
		$status = ($item['status'] == 0) ? 'Inactive':'Active';
		$xhtml = '<div class="row">
				<p>ID:</p> '.$item['id'].'
			</div>
			<div class="row">
				<p>User User name:</p>'.$item['username'].'
			</div>
			<div class="row">
				<p>User Full name:</p>'.$item['fullname'].'
			</div>
			<div class="row">
				<p>User Email:</p>'.$item['email'].'
			</div>
			<div class="row">
				<p>User Birthday:</p>'.$item['birthday'].'
			</div>
			<div class="row">
				<p>User Address:</p>'.$item['address'].'
			</div>
			<div class="row">
				<p>Status:</p>'.$status.'
			</div>
			<div class="row">
				<p>Ordering:</p>'.$item["ordering"].'
			</div>
			<div class="row">
				<input type="hidden" name="id" value="'.$id.'">
				<input type="submit" value="Delete" name="submit">
				<input type="button" value="Cancel" name="cancel" id="cancel-button">
			</div>';
	}
	else
	{
		header('location: error.php');
		exit();
	}
	
	$notice = "";
	if(isset($_POST['submit']))
	{
		$id = $_POST['id'];
		$query = "DELETE FROM `user` WHERE `id` = '$id'";
		$database->query($query);
		$xhtml = "<div class='success'>Success</div> Click vào <a href='index.php'>đây</a> để quay lại trang quản lý.";
	}
	
?>
	<div id="wrapper">
    	<div class="title">PHP FILE</div>
        <div id="form">
        <form action="" method="post" name="main-form">
        	<?php 
        		echo $xhtml;
			?>
		</form>
        </div>
        
    </div>
</body>
</html>
