<?php
// UCLN
function UCLN($n1,$n2)
{
	for($i=1;$i <= $n1;$i++)
	{
		if($n1 % $i == 0)
		{
			$uclnN1[] = $i;
		}
	}
	for($j=1;$j <= $n2;$j++)
	{
		if($n2 % $j == 0)
		{
			$uclnN2[] = $j;
		}
	}
	// Hàm tìm UCLN của n1 và n2 => array_intersect
	$temp = array_intersect($uclnN1, $uclnN2);

	$result = max($temp);
	return $result;
}

function optimizeFraction($fractions)
{
	$arrFractions = explode("/", $fractions);

	$ucln = UCLN($arrFractions[0],$arrFractions[1]);

	$arrFractions[0] = $arrFractions[0] / $ucln;
	$arrFractions[1] = $arrFractions[1] / $ucln;

	return $arrFractions;
}
?>