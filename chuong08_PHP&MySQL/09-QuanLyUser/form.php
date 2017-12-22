<?php
	session_start();
	require_once 'class/Validate.class.php';
	require_once 'connect.php';
	require_once 'class/HTML.class.php';
	$error 			= "";
	$outValidate 	= array();
	$action = $_GET["action"];
	$flagRedirect = false;
	$titlePage = "";
	if($action == "edit")
	{
		$id = $_GET["id"];
		$id = mysql_real_escape_string($id);
		$query = "SELECT `name`,`status`,`ordering` FROM `group` WHERE id = '".$id."'";
		$outValidate = $database->singleRecord($query);
		$linkForm = 'form.php?action=edit&id=' .$id;
		$titlePage = "EDIT USER";
		if(empty($outValidate))
		{
			$flagRedirect = true;
		}
	}
	else if($action == "add")
	{
		$titlePage = "ADD USER";
		$linkForm = 'form.php?action=add';
	}
	else
	{
		$flagRedirect = true;
	}
	
	// Check xem page có tồn tại hay không
	if($flagRedirect == true)
	{
		header('location: error.php');
		exit();
	}
	
	$success = "";
	$arrStatus 	= array(2 => "Select status", 0 => "Inactive", 1 => "Active");
	$query = "SELECT `id`,`name` FROM `group`";
	if(!empty($_POST))
	{
		if(isset($_SESSION["token"]))
		{
			if($_SESSION["token"] == $_POST["token"])
			{
				unset($_SESSION["token"]);
			 	header("location: " .$linkForm);
				exit();
			}
			else
			{
				$_SESSION["token"] = $_POST["token"];
			}
		}
		else
		{
			$_SESSION["token"] = $_POST["token"];
		}
		$source = array("username" 	=> $_POST["username"],
						"email" 	=> $_POST["email"],
						"password" 	=> $_POST["password"],
						"birthday" 	=> $_POST["birthday"],
						"status" 	=> $_POST["status"],
						"groupid" 	=> $_POST["groupid"],
						"ordering" 	=> $_POST["ordering"]);
		
		$validate = new Validate($source);
		$validate 	->addRule('username','string',2,50)
					->addRule('email','email')
					->addRule('password','password')
					->addRule('birthday','birthday')
					->addRule('ordering','int',1,10)
					->addRule('status','status')
					->addRule('groupid','groupID');
		$validate -> run();
		$outValidate = $validate->getResult();
		if(!$validate->isValid())
		{
			$error = $validate->showErrors();
		}
		else
		{
			if($action == "edit")
			{
				$where = array(array('id',$id));
				$database -> update($outValidate,$where);
			}
			else
			{
				$database -> insert($outValidate);
				$outValidate = array();
			}
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
		if(isset($outValidate["groupid"]))
		{
			$groupID = $database ->listSelectBox($query,'groupid',$outValidate["groupid"]);
		}
		else
		{
			$groupID = $database ->listSelectBox($query,'groupid');
		}
	}
	else
	{
		if(isset($outValidate['status']))
		{
			$status = HTML::createSelectbox($arrStatus, 'status',$outValidate['status']);
		}
		else
		{
			$status = HTML::createSelectbox($arrStatus, 'status');
		}
		if(isset($outValidate["groupid"]))
		{
			$groupID = $database ->listSelectBox($query,'groupid',$outValidate["groupid"]);
		}
		else
		{
			$groupID = $database ->listSelectBox($query,'groupid');
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<title><?php echo $titlePage?></title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/my-js.js"></script>
</head>
<body>
	<div id="wrapper">
    	<div class="title"><?php echo $titlePage?></div>
        <div id="form">
        	<?php 
        		echo $error . $success;
        	?>
			<form action="<?php echo $linkForm?>" method="post" name="add-form">
				<div class="row">
					<p>UserName</p>
					<input type="text" name="username" value="<?php echo (isset($outValidate['username']))? $outValidate['username']: '' ?>" />
				</div>
				<div class="row">
					<p>Email: </p>
					<input type="text" name="email" value="<?php echo (isset($outValidate['email']))? $outValidate['email']: '' ?>" />
				</div>
				
				<div class="row">
					<p>Password: </p>
					<input type="password" name="password" value="<?php echo (isset($outValidate['password']))? $outValidate['password']: '' ?>" />
				</div>
				
				<div class="row">
					<p>BirthDay: </p>
					<input type="text" id="birthday" name="birthday" value="<?php echo (isset($outValidate['birthday']))? $outValidate['birthday']: '' ?>" />
				</div>

				<div class="row">
					<p>Status</p>
					<?php 
						echo $status;
					?>
				</div>
				<div class="row">
					<p>Group</p>
					<?php 
						echo $groupID;
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
