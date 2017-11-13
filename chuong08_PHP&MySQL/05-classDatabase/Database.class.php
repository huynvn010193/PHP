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
		$sql = "UPDATE `group` SET ".$newSet." WHERE ".$newWhere;
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
				$newWhere[] = "`$value[0]` = $value[1]";
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
	public function listRecord($resultQuery = null)
	{
		$result = array();
		$resultQuery = ($resultQuery == null) ? $this->resultQuery : $resultQuery;
		if(mysql_num_rows($resultQuery) > 0)
		{
			while($row = mysql_fetch_assoc($resultQuery))
			{
				$result[] = $row;
			}
			mysql_free_result($resultQuery);
		}
		return $result;
	} 
	
	//SINGLE RECORD
	public function singleRecord($resultQuery = null)
	{
		$result = array();
		$resultQuery = ($resultQuery == null) ? $this->resultQuery : $resultQuery;
		if(mysql_num_rows($resultQuery) > 0)
		{
			while($row = mysql_fetch_assoc($resultQuery))
			{
				echo "<pre>";
					print_r($row);
				echo "</pre>";
			}
		}
		mysql_free_result($resultQuery);
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
	
	//AFFECTED ROWS
	public function affectedRow()
	{
		return mysql_affected_rows($this->connect);
	}
}
