
<?php
 class Cat
{
 	public $name;
 	public $color;
 	public $age;
 	
 	
 	// Cách gọi 1
 	/*
 	public function __construct()
 	{
 		echo __METHOD__;
 		$this -> name = "Kitty";
 		$this -> color = "brown";
 		$this ->age = 2;
 	}
 	*/
 	public function __construct($name,$color,$age)
 	{
 		echo "Construct parmams";
 		$this -> name = $name;
 		$this -> color = $color;
 		$this ->age = $age;
 	}
 	
 	
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
 	
 	public function showInfo()
 	{
 		echo "<br/>Name: " . $this-> getName();
 		echo "<br/>Color: " . $this-> getColor();
 		echo "<br/>Age: " . $this-> getAge();
 	}
 	
 	
}
?>