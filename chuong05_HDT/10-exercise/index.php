<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="content" style="text-align:left">
		<h1>PHP OOP</h1>
		<?php 
			require_once 'PhanSo.class.php';
			$ps1 = new PhanSo(4,7);
			$ps2 = new PhanSo(5,3);
			$ps1->tongPS($ps2);
			$ps1->showPS();
			
			
			
			
			// Tối giản phân số=> tìm UCLN và chia Tử số và mẫu số cho UCLN
			
			
			// Tổng 2 phân số
			
			// Hiệu 2 phân số
			
			
			// Tích 2 phân số
			
			// Thương của 2 phân số
		?>
	</div>
</body>
</html>
