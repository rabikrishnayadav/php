<?php 
/**
 * 
 */
class dbController // here is created(defined) the class dbController
{
	private $host = 'localhost';
	private $user = 'root';
	private $password = '';
	private $dbName = 'dropdown';

	private $conn;

	function __construct()
	{
		$this->conn = $this->connectDB();
	}

	function connectDB(){
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->dbName);
		mysqli_set_charset($conn,'utf8');
		return $conn;
	}

	function runQuery($query){
		$result = mysqli_query($this->conn,$query);
		while($row = mysqli_fetch_assoc($result)){
			$resultset[] = $row;
		}
		if (!empty($result))
			return $resultset;
	}

	function numRows($query){
		$result = mysqli_query($this->conn,$query);
		$rowCount = mysqli_num_rows($result);
		return $rowCount;
	}
}



 ?>