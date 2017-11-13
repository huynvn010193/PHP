<?php
	require_once 'class/Cat.class.php';
	$catA = new Cat("Mimi","yellow",3,"2kg");
	//$catA -> showInfo();
	
	
	// Sao chép 1 đối tượng từ đối tượng khác
	$catB = clone $catA;
	$catB->setName('Kitty');
	$catB->setAge(5);
	$catB->setColor('Blue');
	$catB -> showInfo();
	
	echo "<hr/><br/>";
	$catA -> showInfo();
?>

