<?php
	class Cat2
	{
		private $name;
		private $age;
		
		public function __construct($name = "Doremon",$age = 2)
		{
			$this ->name = $name;
			$this ->age = $age;
		}
		
		public function __set($name,$value)
		{
			$this -> $name = $value;
		}
		public function __get($name)
		{
			return $this->$name;
		}
		public function showInfo()
		{
			echo '<br/>Name:' .$this->name;
			echo '<br/>Age:' .$this->age;
		}
	}
?>