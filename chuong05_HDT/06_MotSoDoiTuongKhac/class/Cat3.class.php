<?php
	class Cat3
	{
		private $info;
		
		
		public function __construct($name = "Doremon",$age = 2)
		{
			$this ->name = $name;
			$this ->age = $age;
		}
		public function __set($name,$value)
		{
			$this -> info[$name] = $value;
		}
		
		public function __get($name)
		{
			return $this->info[$name];
		}
		public function showInfo()
		{
			echo '<br/>Name:' .$this->name;
			echo '<br/>Age:' .$this->age;
		}
	}
?>