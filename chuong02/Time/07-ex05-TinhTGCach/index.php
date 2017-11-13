<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tìm xem thời gian cách</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
	<div class="content">
		<h1>Tìm xem thời gian cách</h1>
		<?php 
			// So sanh1c timePost và timeCurrent
			$timePost = '18/6/2013 09:20:23';
			$timeReplace = '29/6/2013 10:25:24';
			
			$datePost = date_parse_from_format('d/m/Y H:i:s', $timePost);
			$dateReplace = date_parse_from_format('d/m/Y H:i:s', $timeReplace);
			$tsPost = mktime(
				$datePost['hour'],
				$datePost['minute'],
				$datePost['second'],
				$datePost['month'],
				$datePost['day'],
				$datePost['year']
			);
			$tsReplace = mktime(
				$dateReplace['hour'],
				$dateReplace['minute'],
				$dateReplace['second'],
				$dateReplace['month'],
				$dateReplace['day'],
				$dateReplace['year']
			);
			
			$distance = $tsReplace - $tsPost;
			
			$result = 'Số quá lớn'; 
			switch ($distance)
			{
				case ($distance < 60):
					if($distance == 1)
					{
						$result = $distance . ' second ago';
					}
					else
					{
						$result = $distance . ' seconds ago';
					}
				case ($distance >= 60 && $distance < 3600):
					$minute = round($distance / 60);
					if($minute == 1)
					{
						$result = $minute . ' minute ago';
					}
					else
					{
						$result = $minute . ' minutes ago';
					}
					break;
				case ($distance >= 3600 && $distance < 86400):
					$hour = round($distance / 3600);
					if($hour == 1)
					{
						$result = $hour . ' hour ago';
					}
					else
					{
						$result = $hour . ' hours ago';
					}
					break;
				case (round($distance/86400) == 1):
					$result = "Yesterday at " .date('H:i:s', $tsReplace);
					break;
				default: 
					$result = date('d/m/Y \a\t H:i:s', $tsReplace);
			}
			echo $result;

		?>
	</div>
	
</body>
</html>