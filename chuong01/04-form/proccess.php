 <meta charset="UTF-8">
<?php
	$userName = $_POST["username"];
	$password = $_POST["password"];
	$result = ($userName == "admin" && $password == "123456") ? "Đăng nhập thành công":"Đăng nhập thất bại" ;
	echo $result;
?>