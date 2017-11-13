
<?php
 class Cat
{
 	public $name;
 	public $color;
 	public $age;
 	public $weight;
 	
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
 	public function __construct($name ="Hello",$color ="yellow",$age = 3,$weight = 4)
 	{
 		$this -> name = $name;
 		$this -> color = $color;
 		$this ->age = $age;
 		$this ->weight = $weight;
 	}
 	function __sleep()
 	{
 		return array('name','color','age');
 	}
 	function __wakeup()
 	{
 		$this -> name = "Hello";
 		$this -> color = "blue";
 		$this ->age = 3;
 		$this ->weight = 4;
 	}
 	public function __toString()
 	{
 		$result = $this->name;
 		$result .= '<br/>' .$this->color;
 		$result .= '<br/>' .$this->age;
 		$result .= '<br/>' .$this->weight;
 		return $result;
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
 		//echo "<br/>Speed - seft:" .self::$maxSpeed;
 		//echo "<br/>Speed - Cat" .Cat::$maxSpeed;
 	}
 	
 	
}
?>