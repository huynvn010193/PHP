<?php
/*
 	$to = 'hpn010193@gmail.com';
	$subject = 'Email Test 4';
	$message = '<h3 style="color:red">This is a test 4</h3>';
	$header  = 'From: huy.nguyen@efe.com.vn \r\n';
	$header  .= 'Content-type:text/html; charset=utf-8 \r\n';
	$header  .= 'Cc: huynvnps02503@fpt.edu.vn \r\n';
	$header  .= 'Bc: ndc6875@gmail.com \r\n';
	if(mail($to, $subject, $message,$header)==true)
	{
		echo 'success';
	}
	else 
	{
		echo 'fail';
	}
 */
	$to			= "hpn010193@gmail.com";
	$subject	= 'Email test 5';
	$message	= '<h3 style="color:red">This is a test 5</h3>';
	
	$header		 = "From: huy.nguyen@efe.com.vn \r\n";
	$header		.= "Content-type:text/html; charset=utf-8 \r\n";
	$header		.= "Cc: huynvnps02503@fpt.edu.vn \r\n";
	$header		.= "Bcc: ndc6875@gmail.com \r\n";
	
	if(mail($to, $subject, $message, $header)==true){
		echo 'Success';
	}else{
		echo 'Fail';
	}

?>

	