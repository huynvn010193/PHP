<?php 
    require_once 'class/Database.class.php';
   	$params = array(
    		'server' => 'localhost',
    		'username' => 'root',
    		'password' => '',
    		'database' => 'manage_user',
    		'table'	   => 'online'
    );
    $database = new Database($params);
    
    // Lấy ra ip và url từ biến Server
   	$ip = $_SERVER['REMOTE_ADDR'];
    $url = $_SERVER['PHP_SELF'];
    
   	// Tìm kiếm userInfo trong bảng online
   	$query[] = "SELECT `id`";
   	$query[] = "FROM `online`";
   	$query[] = "WHERE `ip` = '".$ip."'";
   	$query[] = "AND `url` = '".$url."'";
   	$query = implode(" ", $query);
   	
   	// thực thi câu lệnh và trả về tổng số dòng
   	$flagExist = $database->isExist($query);
   	
   	// Insert và Update dòng trong bảng => Nếu có thì update và nếu chưa có thì thêm mơi
   	$arrayData = array('ip' => $ip,'url' => $url, 'time' => time());
   	if($flagExist)
   	{
   		$where = array(
   				array('ip',$ip,'and'),
   				array('url',$url)
   		);
   		$database->update($arrayData, $where);
   	}
   	else
   	{
   		$database->insert($arrayData);
   	}
   	
   	// Delete dòng thời gian không phù hợp => thời gian hiện tại + 10 phút => = time + 10*60 < time(); => tiến hành xóa
   	$time = time();
   	$query  = "DELETE FROM `online` WHERE `time` + 60 < " .$time;
   	$database -> query($query);
   	
   	// Hiển thị danh sách những dòng dữ liệu có trong bàng online
	 $query = array();
	 $query[] = "SELECT *";
	 $query[] = "FROM `online`";
	 $query[] = "WHERE `url` = '$url'";
	 $query = implode(" ", $query);
	 $list = $database->listRecord($query);
	 echo '<pre>';
		print_r($list);
	 echo '</pre>';
	 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>User online</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">User online</div>
    	<div id="form">
    		<?php echo __FILE__?>
    	</div>
    </div>
</body>
</html>
