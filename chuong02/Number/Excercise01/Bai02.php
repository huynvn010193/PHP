<?php
	require_once 'funtion-fractions.php';
	
	$fractions1 = "52/6";
	$fractions2 = "34/8";
	
	echo "<hr/> Input: <br/>";
	echo "Phan so 01: " .$fractions1 . "<br/>";
	echo "Phan so 02: " .$fractions2 . "<br/>";
	
	echo "<hr/> Toi gian: <br/>";
	$arrKQ1 = optimizeFraction($fractions1);
	$tg1 = implode("/", $arrKQ1);
	
	$arrKQ2 = optimizeFraction($fractions2);
	$tg2 = implode("/", $arrKQ2);
	
	echo "Phan so 01 toi gian: " .$tg1 . "<br/>";
	echo "Phan so 02 toi gian: " .$tg2 . "<br/>";
	
	// trước khi nhân tiến hành rút gọn 2 phân số đó.
	$arrResult[0] = $arrKQ1[0] * $arrKQ2[0];
	$arrResult[1] = $arrKQ1[1] * $arrKQ2[1];
	
	echo "<pre>";
		print_r($arrResult);
	echo "</pre>";
	
	echo "<hr/> Ket qua nhan: <br/>";
	$kq = implode("/", $arrResult);
	echo implode("/",optimizeFraction($kq));
	
?>