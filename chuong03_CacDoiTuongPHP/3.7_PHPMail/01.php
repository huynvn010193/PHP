<?php
	$to = 'hpn010193@gmail.com';
	$subject = 'Email Test';
	$message = 'This is a test';
	$header = 'From: huy.nguyen@efe.com.vn';
	if(mail($to, $subject, $message,$header)==true)
	{
		echo 'success';
	}
	else 
	{
		echo 'fail';
	}
?>