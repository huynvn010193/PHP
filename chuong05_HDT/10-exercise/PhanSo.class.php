<?php
class PhanSo
{
	// Thuộc tính: tử số và mẫu số
	public $_tuso;
	public $_mauso;
	
	// Hàm xây dựng
	public function __construct($tuso, $mauso)
	{
		$this->_tuso = $tuso;
		$this->_mauso = $mauso;
	}
	public function showPS()
	{
		echo 'Phân số: ' .$this->_tuso . '/' .$this->_mauso .'<br/>'; 
	}
	public function rutGon()
	{
		$tuso = $this->_tuso;
		$mauso = $this->_mauso;
		$ucln = $this->UCLN($tuso, $mauso);
		$this->_tuso = $tuso/$ucln;
		$this->_mauso = $mauso/$ucln;		
	}
	
	private function UCLN($a,$b)
	{
		// cho $a và $b vào 1 mảng.
		$min = min(array($a,$b));
		while($min > 0)
		{
			if($a % $min == 0 && $b % $min == 0)
			{
				return $min;
			}
			$min--;
		}	
	}
	public function tongPS($phanSo)
	{
		$tuso1 = $this->_tuso;
		$mauso1 = $this->_mauso;
		$tuso2 = $phanSo->_tuso;
		$mauso2 = $phanSo->_mauso;
		$this->_tuso = ($tuso1*$mauso2) + ($tuso2 * $mauso1);
		$this->_mauso = $mauso1*$mauso2;
		$this->rutGon();
		
	}
}

?>
