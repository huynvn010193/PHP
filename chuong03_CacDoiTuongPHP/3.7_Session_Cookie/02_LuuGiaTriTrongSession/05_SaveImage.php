

<?php 
	session_start();
	$image = 'Koala.jpg';
	
	if(file_exists($image))
	{
		$test = getimagesize($image);
		$_SESSION['image']['info'] = getimagesize($image);
		$_SESSION['image']['data'] = file_get_contents($image);
	}
	else
	{
		echo 'File not exits';
	}
	
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
?>