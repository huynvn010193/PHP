<?php
	session_start();
	
	// kiểm tra $_SESSION['age']) tồn tại hay chưa
	// Nếu đã tồn tại => cập nhật lại nó
	// Nếu chưa tồn tại thì gán giá trị là 20.
	
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";
	
	/* if(isset($_SESSION['age']))
	{
		$_SESSION['age'] = 30;
	}
	else
	{
		$_SESSION['age'] = 20;
	} */
	
	

	if(isset($_SESSION['age']))
	{
		unset($_SESSION['age']);
	}
	
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";