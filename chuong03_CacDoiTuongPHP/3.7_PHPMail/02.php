<?php
	$to = 'hpn010193@gmail.com,huynvnps02503@fpt.edu.vn';
	$subject = 'Email Test 2';
	$message = 'This is a test 2';
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