<?php
	// autoLoad: Tự động nạp các lớp từ 1 đường dẫn chứa tử được truyền vào.
	function __autoload($className)
	{
		$path = '/class/';
		require_once $path . "{$className}.class.php";
	}

	//require_once 'class/Cat.class.php';	
	$cat = new Cat('Mimi');
	$cat -> showInfo();
	
	echo "<hr/><br/>";
	$cat = new Lion('Lion A');
	$cat -> showInfo();
?>

