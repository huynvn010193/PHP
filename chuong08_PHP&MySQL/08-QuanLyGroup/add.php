<?php
	require_once 'class/Validate.class.php';
	require_once 'connect.php';
	require_once 'class/HTML.class.php';
	$error 			= "";
	$outValidate 	= array();
	$success = "";
	if(!empty($_POST))
	{
		$validate = new Validate($_POST);
		$validate 	->addRule('name','string',2,50)
					->addRule('ordering','int',1,10);
		$validate -> run();
		$outValidate = $validate->getResult();
		
		if(!$validate->isValid())
		{
			$error = $validate->showErrors();
		}
		else
		{
			$database -> insert($outValidate);
			$success = '<div class="success">Success</div>';
		}
		$arrStatus 	= array(0 => "Inactive", 1 => "Active", 2 => "Select status");
		$status 	= HTML::createSelectbox($arrStatus, 'status', ) 
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP FILE - ADD</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/my-js.js"></script>
</head>
<body>
	<div id="wrapper">
    	<div class="title">ADD-GROUP</div>
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
					<select name="status" class="status">
						<option value="1">Active</option>
						<option value="0">InActive</option>
					</select>
				</div>
				<div class="row">
					<p>Ordering</p>
					<input type="text" name="ordering" value="<?php echo (isset($outValidate['ordering']))? $outValidate['ordering']: '' ?>"/>
				</div>
				<div class="row">
					<input type="submit" value="Save" name="submit">
					<input type="button" value="Cancel" name="cancel" id="cancel-button">
				</div>
			</form>    
        </div>
        
    </div>
</body>
</html>
