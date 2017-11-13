<?php
class Upload
{
	// Biến lưu trữ tên tập tin
	private $_fileName;
	// Biến lưu trữ kích thước tập tin
	private $_fileSize;
	// Biến lưu phần mở rộng của tập tin
	private $_fileExtension;
	// Biến lưu đường dẫn của thư mục tạm.
	private  $_fileTmp;
	// Biến lưu trữ lỗi
	private $_errors;
	// Biến lưu trữ đường dẫn upload
	private $_uploadDir;
	// Phương thức khởi tạo
	public function __construct($fileName)
	{
		//echo __METHOD__;
		$fileInfo = $_FILES[$fileName];
		$this-> _fileName 		= $fileInfo['name'];
		$this-> _fileSize 		= $fileInfo['size'];
		$this-> _fileExtension 	= $this->getFileExtension();
		$this-> _fileTmp 		= $fileInfo['tmp_name'];
	}
	
	// Phương thức lấy phần mở rộng của tập tin
	public function getFileExtension()
	{
		$ext = pathinfo($this-> _fileName,PATHINFO_EXTENSION);
		return $ext;
	}
	
	// Phương thức thiết lập phần mở rộng được phép up load
	public function setFileExtension($arrExtension)
	{
		$ext = $this-> _fileExtension;
		if(in_array(strtolower($ext), $arrExtension) == false)
		{
			$this -> _errors[] = "Phần mở rộng không phù hợp";
		}
	}
	
	// Phương thức thiết lập kích thước tối thiểu và kích thước tối đa
	public function setFileSize($min,$max)
	{
		$fileSize = $this-> _fileSize;
		if($fileSize < $min || $fileSize > $max)
		{
			$this -> _errors[] = "Kích thước không phù hợp";
		}
	}
	
	// Phương thức thiết lập đường dẫn đến foleder upload
	public function setUploadDir($value)
	{
		if(file_exists($value))
		{
			$this-> _uploadDir = $value;
		}
		else
		{
			$this -> _errors[] = 'Thư mục không hợp lệ';
		}
	}
	
	// Kiểm tra điều kiện upload của tập tin
	public function isVail()
	{
		$flag = false;
		if(count($this->_errors) > 0)
		{
			$flag = true;
		}
		return $flag;
	}
	
	// Phương thức upload
	public function upload($rename = true)
	{
		$tmp_name = $this-> _fileTmp ;
		$uploadDir = $this-> _uploadDir;
		$fileExtension = $this-> _fileExtension;
		$fileNameRandom = $this -> randomString(6);
		if($rename == true)
		{
			$destination = $uploadDir .$fileNameRandom;
		}
		else
		{
			$destination = $uploadDir . $this -> _fileName;
		}
		
		//echo $destination;
		@move_uploaded_file($tmp_name,$destination);
		
	}
	
	// Phương thức hiển thị lỗi
	public function showError()
	{
		echo "<pre>";
			print_r($this->_errors);
		echo "</pre>";
	}
	
	// phương thức random
	private function randomString($length)
	{
		$arrCharacter = array_merge(range('A','Z'), range('a', 'z'),range(0,9));
		$arrCharacter = implode($arrCharacter, '');
		$arrCharacter = str_shuffle($arrCharacter);
		$ext = $this->_fileExtension;
		$result = substr($arrCharacter,0,$length) .'.' .$ext;
		return $result;
	}
	
}

