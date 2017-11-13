<?php
	session_start();
	
	// kiểm tra $_SESSION['age']) tồn tại hay chưa
	// Nếu đã tồn tại => cập nhật lại nó
	// Nếu chưa tồn tại thì gán giá trị là 20.
	
	
	session_destroy();
	
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";