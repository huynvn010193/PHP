

<?php 
	session_start();
	
	$_SESSION['file'] = '<!DOCTYPE html>
						<html>
						<head>
						<meta charset="UTF-8">
						<title>Title of the document</title>
						</head>
						
						<body>
							<h1>This is a File</h1>
						</body>
						
						</html>
						
						<?php
							function checkNumber($number)
							{
								return ($number % 2 == 0) ? "So chan":"So le";
							}
						?>';
			
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";
	
	eval($_SESSION['function']);
	echo checkNumber(2);
	
?>