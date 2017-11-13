<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Login</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">LOGIN</div>
        <div id="form">
        	<?php
        		require_once 'functions.php'; 
        		if(!checkEmpty($_POST['username']) && !checkEmpty($_POST['password']))
        		{
        			$data = file_get_contents('user.txt');
        			echo "<pre>";
        				print_r($data);
        			echo "</pre>";
        		}
        		else
        		{
        			header('location: login.php');
        		}
        	?>    
        </div>
    </div>
</body>
</html>
