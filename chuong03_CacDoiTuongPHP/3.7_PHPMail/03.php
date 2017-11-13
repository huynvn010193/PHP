<?php
	$to = 'hpn010193@gmail.com';
	$subject = 'Email Test 3';
	$message = '<h3 style="color:red">This is a test 3</h3>';
	$header  = 'From: huy.nguyen@efe.com.vn \r\n';
	$header  .= 'Content-type:text/html; charset=utf-8 \r\n';
	
	if(mail($to, $subject, $message,$header)==true)
	{
		echo 'success';
	}
	else 
	{
		echo 'fail';
	}
?>