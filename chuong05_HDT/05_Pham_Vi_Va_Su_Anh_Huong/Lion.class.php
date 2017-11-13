<?php
require_once 'Cat.class.php';
	class Lion extends Cat
	{
		public  $maxSpeed = "50km/h";
		public function showInfo()
		{
			parent::showInfo();
			echo "<br/>Lion";
		}
	}
?>