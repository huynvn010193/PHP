<?php
	require_once 'library/class.phpmailer.php';
	
	$mail = new PHPMailer();
	// Thiết lặp thông tin người gửi và email của người gửi
	$mail->SetFrom('hpn010193@gmai.com','Huy Nhật');
	
	// Thiết lập thông tin người nhận và email của người nhận
	$mail->AddAddress('huynvnps02503@fpt.edu.vn');
	
	//Thiết lặp tiêu đề mail
	$mail->Subject = 'PHP Mailer';
	
	//Thiết lập charset UTF-8
	$mail->Charset = 'utf-8';
	
	// Thiết lập nội dung
	$mail->Body = 'Khóa học lập trình web';
	
	if($mail->send() == false)
	{
		echo 'Error' .$mail->ErrorInfo;
	}
	else
	{
		echo 'Success';
	}
?>