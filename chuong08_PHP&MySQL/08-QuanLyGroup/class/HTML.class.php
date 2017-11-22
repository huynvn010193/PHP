<?php
class HTML
{
	static public function createSelectbox($arrData,$name,$keySelected, $class = null)
	{
		$xhtml = "";
		if(!empty($arrData))
		{
			$xhtml = '<select class = "'.$class.'" name = "'.$name.'">';
			for ($i = 0; $i < count($arrData); $i++)
			{
				if($keySelected == $i)
				{
					$xhtml = '<option value="'.$i.'" selected="true">'.$arrData[$i].'"</option>';
				}
				else
				{
					$xhtml = '<option value="'.$i.'">'.$arrData[$i].'"</option>';
				}
			}
			$xhtml .= '</select>';
		}
	}
}