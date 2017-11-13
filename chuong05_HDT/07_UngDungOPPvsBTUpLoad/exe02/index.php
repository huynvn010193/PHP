<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="content">
	<h1>PHP Upload</h1>
		<form action="proccess.php" method="post" name="main-form" id="main-form" 
		enctype="multipart/form-data">
			<input type="file" name="file-upload"/>
			<input type="submit" value="Submit" name="submit"/>
		</form>
	</div>
</body>
</html>
