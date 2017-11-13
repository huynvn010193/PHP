<?php
class Sample
{
	const money = 1000;
	public $money = "This is a test";

	public function showInfo()
	{
		echo "<h2>C1: " .Sample::money ."</h2>";
		echo "<h2>C1: " .self::money . "</h2>";
		echo "<h2>C1: " .$this::money . "</h2>";
	}
}
$sample = new Sample();
echo $sample->money;
echo $sample::money;
echo $sample->showInfo();
?>