
<?php
 class Cat
{
 	public $name;
 	public $color;
 	public $age;
 	public $weight;
 	public $maxSpeed = "20km/h";
 	
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
 	public function __construct($name = "Doremon",$age = 19,$color = "blue",$weight = "2kg")
 	{
 		echo "Construct parmams";
 		$this -> name = $name;
 		$this ->age = $age;
 		$this -> color = $color;
 		$this ->weight = $weight;
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
 	public function  getWeight()
 	{
 		return $this -> weight;
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
 	public function  setWeight($value)
 	{
 		$this -> weight = $value;
 	}
 	
 	public function showInfo()
 	{
 		echo "<br/>Name: " . $this-> getName();
 		echo "<br/>Color: " . $this-> getColor();
 		echo "<br/>Age: " . $this-> getAge();
 		echo "<br/>Weight: " .$this->getWeight();
 	}
 	
 	
}
?>