<?php
	$courses = array("PHP","Zend","Joomla","ABC","ZYZ");
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	
	function  removeItem(&$array,$type= "first",$total = 2)
	{
		$result = array();
		if($total >= count($array))
		{
			$result = $array;
			$array = null;
		}
		else
		{
			if(!empty($array))
			{
				if($type == "first")
				{
					for($i = 1; $i <= $total;$i++)
					{
						$result[] = array_shift($array);
					}
				}
				else if($type == "last")
				{
					for($i = 1; $i <= $total;$i++)
					{
						$result[] = array_pop($array);
					}
				}
			}
		}
		
		return $result;
	}
	$arrTem = removeItem($courses,"first",20);
	
	echo "arrTem: </br>";
	echo "<pre>";
	print_r($arrTem);
	echo "</pre>";
	
	echo "courses: </br>";
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
?>