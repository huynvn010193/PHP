<?php
 class Cat
{
 	public $name = "Kitty";
 	private $color = "Yellow";
 	protected $age = 1;	
}
 
$catA = new Cat();

echo "<br/>Name: " . $catA-> name;
echo "<br/>Color: " . $catA-> color;
echo "<br/>Age: " . $catA-> age;
	
 
 ?>