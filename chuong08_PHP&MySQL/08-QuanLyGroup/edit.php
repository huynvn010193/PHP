<?php
	session_start();
	require_once 'class/Validate.class.php';
	require_once 'connect.php';
	require_once 'class/HTML.class.php';
	$error 			= "";
	$outValidate 	= array();
	$id = $_GET["id"];
	$id = mysql_real_escape_string($id);
	$query = "SELECT `name`,`status`,`ordering` FROM `group` WHERE id = '".$id."'";
	$outValidate = $database->singleRecord($query);
	$success = "";
	$arrStatus 	= array(2 => "Select status", 0 => "Inactive", 1 => "Active");
	if(empty($outValidate))
	{
		header('location: error.php');
		exit();
	}
	if(!empty($_POST))
	{
		if(isset($_SESSION["token"]))
		{
			if($_SESSION["token"] == $_POST["token"])
			{
				unset($_SESSION["token"]);
			 	header("location: " .$_SERVER["PHP_SELF"]."?id=".$id);
				exit();
			}
			else
			{
				$_SESSION["token"] = $_POST["token"];
				echo $_SESSION["token"];
			}
		}
		else
		{
			$_SESSION["token"] = $_POST["token"];
		}
		$source = array("name" => $_POST["name"],
						"status" => $_POST["status"],
						"ordering" => $_POST["ordering"]
				);
		$validate = new Validate($source);
		$validate 	->addRule('name','string',2,50)
					->addRule('ordering','int',1,10)
					->addRule('status','status');
		$validate -> run();
		$outValidate = $validate->getResult();
		
		if(!$validate->isValid())
		{
			$error = $validate->showErrors();
		}
		else
		{
			$where = array(array('id',$id));
			$database -> update($outValidate,$where);
			$success = '<div class="success">Success</div>';
		}
		if(isset($outValidate["status"]))
		{
			$status = HTML::createSelectbox($arrStatus, 'status',$outValidate["status"]);
		}
		else
		{
			$status = HTML::createSelectbox($arrStatus, 'status');
		}
	}
	else
	{
		
		$status = HTML::createSelectbox($arrStatus, 'status',$outValidate['status']);
	}
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP FILE - Edit</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/my-js.js"></script>
</head>
<body>
	<div id="wrapper">
    	<div class="title">EDIT-GROUP</div>
        <div id="form">
        	<?php 
        		echo $error . $success;
        	?>
			<form action="#" method="post" name="add-form">
				<div class="row">
					<p>Name</p>
					<input type="text" name="name" value="<?php echo (isset($outValidate['name']))? $outValidate['name']: '' ?>" />
				</div>
				
				<div class="row">
					<p>Status</p>
					<?php 
						echo $status;
					?>
				</div>
				<div class="row">
					<p>Ordering</p>
					<input type="text" name="ordering" value="<?php echo (isset($outValidate['ordering']))? $outValidate['ordering']: '' ?>"/>
				</div>
				<div class="row">
					<input type="submit" value="Save" name="submit">
					<input type="button" value="Cancel" name="cancel" id="cancel-button">
					<input type="hidden" value="<?php echo time();?>" name = "token" />
				</div>
			</form>    
        </div>
        
    </div>
</body>
</html>
