<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<style type="text/css">
	*
	{
		margin: 0px;
		padding:0px;
	}
	.content
	{
		width : 500px;
		padding : 10px;
		border: 2px solid #ddd;
		height: auto;
		margin:10px auto;
	}
</style>
</head>
<body>
	<div class="content">
	<?php
		$group = array(
				"1" => "Admin",
				"2" => "Manager",
				"3" => "Member",
				"4" => "Guest",
		);
		
		$city = array(
				"ct" => "Cần Thơ",
				"tg" => "Tiền Giang",
				"bc" => "Bạc Liêu"
				);
		function createSelectBox($name,$attribute,$array,$keySelect)
		{
			$xhtml = "";
			if(!empty($array))
			{
				$xhtml .= '<select name="'.$name.'" id="'.$name.'" style="'.$attribute.'">';
				foreach ($array as $key => $value)
				{
					if($key == $keySelect)
					{
						$xhtml .= '<option value="'.$key.'" selected="selected">'.$value.'</option>';
					}
					else
					{
						$xhtml .= '<option value="'.$key.'">'.$value.'</option>';
					}
				}
				$xhtml .='</select>';
			}
			return $xhtml;
		}
		
		$groupSelect = createSelectBox("group","width : 200px" , $group, 3);
		$citySelect = createSelectBox("city","width : 100px" , $city, 1);
		
		echo $groupSelect ."<br/>" .$citySelect;
	?>
		
			
		
	</div>
</body>
</html>
