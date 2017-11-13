<?php
	class Sample
	{
		static $a = 1000;
		static public function showInfo()
		{
			echo "ShowInfo";
		}
	}
	$sample = new Sample();
	/*
		echo "Static a: "	.$sample::$a;
		echo "<br/>";
		echo $sample -> showInfo();
	*/
	$sample::showInfo();
?>