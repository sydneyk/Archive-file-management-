<?php


class Database{

	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $dbName = "fms";



	public $db;

	public function __construct(){
		$this->dbConnection();
	}

	public function dbConnection(){
		$this->db = new Mysqli($this->host,$this->user,$this->pass,$this->dbName);
		if (!$this->db) {
			print($this->db->num_error);
		}
	}

	public function save($table, $fields = ''){
		$insert = "INSERT INTO ".$table."(".implode(",", array_keys($fields)).")VALUES('".implode("','", array_values($fields))."')";
			$result = $this->db->query($insert);

			if ($result) {
				return true;
			}else{
				return false;
			}
		}

		public function view($table){
			$select = "SELECT * FROM ".$table." ";
			$result = $this->db->query($select);
			$list = array();
			while ($data = $result->fetch_array()) {
				$list[] = $data;
			}
			return $list;
		}

		
public function selectWhere($table, $where = '') {
    $condition = "";
    $list = array();
    foreach ($where as $key => $value) {
        // Handle "!=" condition separately
        if (strpos($key, '!=') !== false) {
            $key = str_replace('!=', '', $key);
            // Check if $value is an array
            if (is_array($value)) {
                $condition .= $key . " NOT IN ('" . implode("','", $value) . "') AND ";
            } else {
                $condition .= $key . " != '" . $value . "' AND ";
            }
        } else {
            // Check if $value is an array
            if (is_array($value)) {
                $condition .= $key . " IN ('" . implode("','", $value) . "') AND ";
            } else {
                $condition .= $key . " = '" . $value . "' AND ";
            }
        }
    }
    $condition = substr($condition, 0, -5);
    $sql = "SELECT * FROM " . $table . " WHERE " . $condition . " ";
    $result = $this->db->query($sql);

    while ($row = $result->fetch_array()) {
        $list[] = $row;
    }
    return $list;
}




		public function update($table, $fields, $where){
			$query = "";
			$condition = "";
			foreach ($fields as $key => $value) {
				$query .= $key ." = '". $value. "', ";
			} 
			$query = substr($query, 0, -2);
			foreach ($where as $key => $value) {
				$condition .= $key. " = '".$value."' AND ";
			}
			$condition = substr($condition, 0, -5);
			$sql = "UPDATE ".$table." SET ".$query." WHERE ".$condition." ";
			$result = $this->db->query($sql);

			if ($result) {
				return true;
			}else{
				return false;
			}
		}
		public function delete($table, $where){
			$condition = "";
			foreach ($where as $key => $value) {
				$condition .= $key. "= '".$value."' AND ";
			}
			$condition = substr($condition, 0, -5);
			$sql = "DELETE FROM ".$table." WHERE ".$condition." ";
			$result = $this->db->query($sql);
			if($result){
				return true;
			}else{
				return false;
			}
		}


	}


