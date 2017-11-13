<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bài Tập về mảng-Trắc nghiệm tính cách</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript">
	function validate()
	{
		
	}
	
</script>
</head>
<body>
<?php 
	require_once 'function-a.php'; // 
	require_once 'function-b.php';//
	
	$newArray = array();
	foreach ($arrayQuestion as $key => $value)
	{
		$newArray[$key]["question"] = $value["question"];
		$newArray[$key]["sentences"] = $arrayOption[$key];	
	}
	/*
	echo "<pre>";
	print_r($newArray);
	echo "<pre>";
	*/
?>
	<div class="content">
		<h1>Trắc nghiệm tính cách</h1>
		<form action="result.php" method="POST" name="mainForm" >
		<?php 
			$i = 1;
			foreach($newArray as $key => $value)
			{
		?>
			<div class="question">
				<p>
					<span><?php echo $i?>:</span> <?php echo $value["question"]?>
				</p>
				<ul>
					<?php foreach($value["sentences"] as $keyC => $valueC)
					{	
					?>
					<li>
						<label>
							<input id="ck" type="radio" name="<?php echo $key?>" value="<?php echo $valueC["point"]?>"/>
							<?php echo $valueC["option"]?>
						</label>
					</li>
					<?php 
					}
					?>
				</ul>
			</div>
	
		<?php 
			$i++;}
		?>
			<input type="submit" value="Kiểm tra" name="submit" onclick="validate();"/>
		</form>
	</div>
	
	
</body>
</html>