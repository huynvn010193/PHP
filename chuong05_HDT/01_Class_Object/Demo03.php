<?php
 class Cat
{
 	public $name;
 	public $color;
 	public $age;
 	
 	// Method 
 	public function getName()
 	{
 		return $this -> name;
 	}
 	
 	public function getColor()
 	{
 		return $this -> color;
 	}
 	
 	
 	public function getAge()
 	{
 		return $this -> age;
 	}
 	
 	
 	public function setName($value)
 	{
 		$this -> name = $value;
 		
 	}
 	
 	public function setColor($value)
 	{
 		$this -> color = $value;
 			
 	}
 	
 	public function setAge($value)
 	{
 		$this -> age = $value;
 	}
}
 
$catA = new Cat();
$catA ->setName("Kitty");
$catA -> setColor("blue");
$catA -> setAge(3);
echo "<br/>Name: " . $catA-> getName();
echo "<br/>Color: " . $catA-> getColor();
echo "<br/>Age: " . $catA-> getAge();
echo "<br/>";

$catB = new Cat();
$catB ->setName("Mimi");
$catB -> setColor("black");
$catB -> setAge(1);
echo "<br/>Name: " . $catB-> getName();
echo "<br/>Color: " . $catB-> getColor();
echo "<br/>Age: " . $catB-> getAge();
echo "<br/>";

?>