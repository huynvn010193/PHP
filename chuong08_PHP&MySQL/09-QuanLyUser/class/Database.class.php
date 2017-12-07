<?php
class Database
{
	protected $connect;
	protected $database;
	protected $table;
	protected $resultQuery;
	
	// CONNECT DATABASE
	public function __construct($params)
	{
		$link = mysql_connect($params['server'],$params['username'],$params['password']);
		if(!$link)
		{
			die('Fail connect: ' .mysql_errno());
		}
		else
		{
			$this->connect = $link;
			$this->database = $params['database'];
			$this->table = $params['table'];
			$this->setDatabase();
			$this->query("SET NAMES 'utf8'");
			$this->query("SET CHARACTER SET 'utf8'");
		}
	}
	// SET CONNECT
	public function setConnect($connect)
	{
		$this->connect = $connect;
	}
	//SET DATABASE
	public function setDatabase($database = null)
	{
		if($database != null)
		{
			$this->database = $database;
		}
		mysql_select_db($this->database,$this->connect);
	}
	//SET TABLE
	public function setTable($table)
	{
		$this->table = $table;
	}
	
	public function __destruct()
	{
		mysql_close($this->connect);
	}
	
	// Insert public function 
	public function insert($data,$type = 'single')
	{
		if($type == 'single')
		{
			$newQuery = $this->createInsertSQL($data);
			$sql = "INSERT INTO `$this->table`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";
			$this->query($sql);
		}
		else
		{
			foreach ($data as $value)
			{
				$newQuery = $this->createInsertSQL($value);
				$sql = "INSERT INTO `$this->table`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";
				$this->query($sql);
			}
		}
		return $this->lastID();
	}
	
	//CREATE Insert SQL
	public function createInsertSQL($data)
	{
		$newQuery = array();
		$cols = "";
		$vals = "";
		if(!empty($data))
		{
			foreach($data as $key => $value)
			{
				$cols .= ", `$key`";
				$vals .= ", '$value'"; //
			}
		}
		$newQuery['cols'] = substr($cols, 2);
		$newQuery['vals'] = substr($vals, 2);
		
		return $newQuery;
	}
	
	//UPDATE
	public function update($data,$where)
	{
		$newWhere = $this->createWhereUpdateSQL($where);
		$newSet= $this->createUpdateSQL($data);
		$sql = "UPDATE `$this->table` SET ".$newSet." WHERE ".$newWhere;
		$this->query($sql);
		return $this->affectedRow();
	}
	// CREATE UPDATE
	public function createUpdateSQL($data)
	{
		$newQuery = "";
		if(!empty($data))
		{
			foreach ($data as $key => $value)
			{
				$newQuery .= ", `$key` = '$value'";
			}
		}
		$newQuery = substr($newQuery, 2);
		return $newQuery;
	}
	
	// CREATE WHERE Update
	public function createWhereUpdateSQL($data)
	{
		$newWhere = "";
		if(!empty($data))
		{	
			foreach ($data as $value)
			{
				$newWhere[] = "`$value[0]` = '$value[1]'";
				if(!empty($value[2]))
				{
					$newWhere[] = $value[2];
				}
			}
			$newWhere = implode(" ", $newWhere);
		}
		return $newWhere;
	}
	
	// CREATE DELETE
	public function delete($where)
	{
		$newWhere = $this->createWhereDeleteSQL($where);
		$query = "DELETE FROM `$this->table` WHERE `id` IN (".$newWhere.")";
		$this->query($query);
		return $this->affectedRow();
	}
	
	// CREATE WHERE DELETE
	public function createWhereDeleteSQL($data)
	{
		if(!empty($data))
		{
			$deleteID= "";
			foreach ($data as $id)
			{
				$deleteID .= "'" .$id. "', ";	
			}
			$deleteID .= "'0'";
			return $deleteID;
		}
	}
	
	//LIST RECORD
	public function listRecord($query){
		$result = array();
		if(!empty($query)){
			$resultQuery = $this->query($query);
			if(mysql_num_rows($resultQuery) > 0){
				while($row = mysql_fetch_assoc($resultQuery)){
					$result[] = $row;
				}
				mysql_free_result($resultQuery);
			}
		}
		return $result;
	}

	//LIST SELECTBOX
	public function listSelectBox($query,$name,$keySelected = null, $class = null){
		$result = array();
		if(!empty($query)){
			$resultQuery = $this->query($query);
			if(mysql_num_rows($resultQuery) > 0){
				$xhtml = '<select class = "'.$class.'" name = "'.$name.'">';
				$xhtml .= '<option value="0">Select a value</option>';
				while($row = mysql_fetch_assoc($resultQuery)){
					//$result[$row["id"]] = $row['name']; // => $row[1] = Admin , $row[2] = User...
					if($keySelected == $row["id"] && $keySelected != null)
					{
						$xhtml .= '<option value="'.$row["id"].'" selected="true">'.$row["name"].'</option>';
					}
					else
					{
						$xhtml .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
					}
				}
				$xhtml .= '</select>';
				mysql_free_result($resultQuery); // Giài phóng bộ nhớ.
			}
		}
		return $xhtml;
	}

	
	//SINGLE RECORD
	public function singleRecord($query){
		$result = array();
		if(!empty($query)){
			$resultQuery = $this->query($query);
			if(mysql_num_rows($resultQuery) > 0){
				$result = mysql_fetch_assoc($resultQuery);
			}
			mysql_free_result($resultQuery);
		}
		return $result;
	}
	
	/*ADD FUNCTION*/
	// LAST ID
	public function lastID()
	{
		return mysql_insert_id($this->connect);
	}
	
	// QUERY 
	public function query($query)
	{
		$this->resultQuery = mysql_query($query,$this->connect);
		
		return $this->resultQuery;
	}
	
	//AFFECTED ROWS : trả về số dòng bị ảnh hưởng câu lệnh SQL INSERT, UPDATE, DELETE.
	public function affectedRow()
	{
		return mysql_affected_rows($this->connect);
	}
	
	public function exist($query)
	{
		if($query != null)
		{
			$this->resultQuery = mysql_query($query,$this->connect);
		}
		
		// nếu trả về có số lượng thì trả về đúng còn ngược lại trả về sai
		if((mysql_num_rows($this->resultQuery)) > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function isExist($query){
		if($query != null) {
			$this->resultQuery = $this->query($query);
		}
		// nếu trả về có số lượng thì trả về đúng còn ngược lại trả về sai
		if((mysql_num_rows($this->resultQuery)) > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
